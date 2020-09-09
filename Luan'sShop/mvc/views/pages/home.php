<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <div class="item">
                        <img src="public/images/slider-01.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/images/slider-02.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/images/slider-03.png" alt="">
                    </div>
                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-1.png">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-2.png">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">1900.9999</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-3.png">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-4.png">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon-5.png">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <?php foreach ($_SESSION['best_sell'] as $item) { ?>
                            <li>
                                <a href="?controller=Products&action=Detail_Product" title="" class="thumb">
                                    <img src="admin/uploads/Product/<?php echo $item['product_thumb']?>">
                                </a>
                                <a href="?controller=Products&action=Detail_Product" title="" class="product-name"><?php echo $item['product_name']?></a>
                                <div class="price">
                                    <span class="new"><?php echo number_format($item['price'])?>đ</span>
                                    <span class="old">6.190.000đ</span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?controller=Cart&action=Add_Cart&id=<?php echo $item['id']?>" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>

                        <?php } ?>


                    </ul>
                </div>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Thời trang</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($data['fashion'] as $item) { ?>
                            <li>
                                <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id'] ?>" title="" class="thumb">
                                    <img src="<?php echo "admin/uploads/Product/" . $item['product_thumb'] ?>">
                                </a>
                                <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id'] ?>" title="" class="product-name"><?php echo $item['product_desc'] ?></a>
                                <div class="price">
                                    <span class="new"><?php echo number_format($item['price']) ?></span>
                                    <span class="old">8.990.000đđ</span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?controller=Cart&action=AddCart&id=<?php echo $item['id'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                        <?php } ?>


                    </ul>
                </div>
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Điện tử</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($data['electronic'] as $item) { ?>
                            <li>
                                <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id'] ?>" title="" class="thumb">
                                    <img src="<?php echo "admin/uploads/Product/" . $item['product_thumb'] ?>">
                                </a>
                                <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id'] ?>" title="" class="product-name"><?php echo $item['product_desc'] ?></a>
                                <div class="price">
                                    <span class="new"><?php echo number_format($item['price']) ?></span>
                                    <span class="old">8.990.000đđ</span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?controller=Cart&action=AddCart&id=<?php echo $item['id'] ?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                        <?php } ?>


                    </ul>
                </div>
            </div>
        </div>
        <?php require "mvc/views/blocks/sidebar_1.php" ?>
    </div>
</div>