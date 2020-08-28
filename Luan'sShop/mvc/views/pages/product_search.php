<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Điện thoại</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left">Laptop</h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                <select name="select">
                                    <option value="0">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="3">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach($data['list_products'] as $item){?>
                            <li>
                            <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id']?>" title="" class="thumb">
                                <img src="<?php echo "admin/uploads/".$item['product_thumb']?>">
                            </a>
                            <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id']?>" title="" class="product-name"><?php echo $item['product_desc']?></a>
                            <div class="price">
                                <span class="new"><?php echo number_format($item['price'])?></span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="?controller=Cart&action=AddCart&id=<?php echo $item['id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="?controller=CArt&action=Check_Out" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>

                        <?php }?>
                        
                    </ul>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       <?php require 'mvc/views/blocks/sidebar_2.php'?>
    </div>
</div>