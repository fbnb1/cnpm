<!-- Chi tiet san pham -->
<?php
    $id = isset($_GET["id"]) ? $_GET["id"]:0;
    //lây một bản ghi
    $product = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
?>
            	<div class="box-container">
                	<div class="box-home box-news">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm</span></a>
                            </div>
                        </div>
                        <div class="content">                        	
                        <div class="detai-product-left">
                            <img src="public/upload/product/<?php echo $product->c_img; ?>" style="border:1px solid #dddddd; padding:1px; width: 150px;"  />
                        </div>
                        <div class="detai-product-right">
                            <div class="product-list">
                                <ul>
                                    <li>
                                        Tên sản phẩm: <?php echo $product->c_name; ?>
                                    </li>
                                    <li>
                                        Danh mục: <?php
                                            $category = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=".$product->fk_category_product_id);
                                            echo $category->c_name;
                                         ?>
                                    </li>
                                    <li>
                                        Giá: <?php echo number_format($product->c_price); ?> VNĐ
                                    </li>
                                    <li>
                                        <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>">
                                        <img src="public/frontend/images/icon-cart.jpg" /> Mua sản phẩm này
                                        </a>
                                    </li>
                                </ul>
                             </div>
                        </div>
                        <div style="clear:both; padding-top:15px;"></div>
                        	<ul>
                            	<li>
                                <div class="news1">                                	                                                                    
                                    <div class="news-content">
                                    <p><a href="#" class="news-title"><?php echo $product->c_description; ?></a></p>
                                    
                                    <p><?php echo $product->c_content; ?></p>

                                    </div>
                                 </div>                                
                                </li>
                            </ul> 
                            <!-- comment -->
                            
                            <!-- end comment -->
                        </div>                        
                    </div>
                </div>
                <!-- hết chi tiet san pham --> 