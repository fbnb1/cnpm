<!-- static -->
<?php
if(isset($_SESSION["static"]) == false){
    //update số truy cập tăng lên 1
    $this->model->execute("update tbl_static set sotruycap=sotruycap+1");
    $_SESSION["static"] = true;
}

    //lấy số truy cập để hiển thị
    $record = $this->model->get_a_record("select sotruycap from tbl_static");
    //đếm số lượng truy cập
    //xác định thời điểm user truy cập hiện tại
    $cur_time = time();
    //thời gian timeout ->tính bằng giây
    $timeout = 900;
    //lấy session_id
    $session_id = session_id();
    //kiểm tra xem session_id đã tòn tại trong table tbl_user_online chưa, nếu chưa thfi insert vào
    $check_session_id = $this->model->num_rows("select pk_user_online_id from tbl_user_online where session_id = '$session_id'");
    if($check_session_id == 0 ){
        $this->model->execute("insert into tbl_user_online(session_id, time) values('$session_id', $cur_time)");
        
    }
    //xóa những session_id quá thời gian timeout
        $this->model->execute("delete from tbl_user_online where $cur_time-time>$timeout");
        //đếm số lượng truy cập - > chính là số bản ghi trong table tbl_user_online
        $user_online = $this->model->num_rows("select pk_user_online_id from tbl_user_online");
?>
                <div class="box-container">
					<div class="box-left">
                    	<div class="header">
                        	<a href="#">Thống kê truy cập</a>
                        </div>
                        <div class="content">
							<ul>
                            	<li>Số truy cập: <?php echo $record->sotruycap; ?></li>
                                <li>Số online: <?php echo $user_online; ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end ststic -->