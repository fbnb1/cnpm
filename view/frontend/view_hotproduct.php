<!-- san pham noi bat -->
            	<div class="box-container">
                	<div class="box-home box-product">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm nổi bật</span></a>
                            </div>
                        </div>
                        <div class="content">
                        	<ul>
                            	<!-- product -->
                                <?php
                                    //liệt kê sản phẩm nổi bật
                                $product = $this->model->get_all("select * from tbl_product where c_hotproduct = 1 limit 0,8");
                                foreach ($product as $rows):
                                ?>
                            	<li>
                                	<div class="image">
                                    	<a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" title="<?php echo $rows->c_name; ?>" style="background:url(public/upload/product/<?php echo $rows->c_img; ?>) no-repeat 50% 50%">
                                        </a>
                                    </div>
                                    <div class="info">
                                    	<p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></p>
										<p><strong>Giá:</strong> <strong class="price"><?php echo number_format($rows->c_price); ?>VNĐ</strong> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>"><img src="public/frontend/images/icon-cart.jpg" style="width:10px;" /> Cart</a></p>
                                    </div>
                                </li>
                                <!-- end product -->
                                <?php endforeach; ?>
                                <!-- product -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end san pham noi bat-->