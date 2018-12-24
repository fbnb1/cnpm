            	<!-- danh mục sản phẩm -->
                <div class="box-container">
                    <div class="product-category">
                        <div class="header"><span>Danh mục sản phẩm</span></div>
                            <div id="product_category">
                            <ul>
                                <?php 
                                    $category = $this->model->get_all("select * from tbl_category_product");
                                    foreach ($category as $rows): 
                                ?>
                                <li>
                                	<a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id; ?>"><span><?php echo $rows->c_name; ?></span></a>
                                </li>                                
                                   <?php endforeach; ?>                     
                            </ul>
                        </div>
                    </div>
				</div>
            	<!-- hết danh mục sản phẩm -->
