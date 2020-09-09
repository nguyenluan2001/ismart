<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh mục sản phẩm</h3>
        </div>
        <div class="secion-detail">
            <ul class="list-item">
                <li>
                    <a href="?page=category_product" title="">Điện thoại</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="?page=category_product" title="">Iphone</a>
                        </li>
                        <li>
                            <a href="?page=category_product" title="">Samsung</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=category_product" title="">Iphone X</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Iphone 8</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Iphone 8 Plus</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=category_product" title="">Oppo</a>
                        </li>
                        <li>
                            <a href="?page=category_product" title="">Bphone</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="?controller=Products&action=Category_Detail&id=1" title="">Thời trang</a>
                </li>
                <li>
                    <a href="?controller=Products&action=Category_Detail&id=2" title="">Điện tử</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section" id="selling-wp">
        <div class="section-head">
            <h3 class="section-title">Sản phẩm bán chạy</h3>
        </div>
        <div class="section-detail">
            <ul class="list-item">
                <?php foreach ($_SESSION['best_sell'] as $item) { ?>
                    <li class="clearfix">
                        <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id']?>" title="" class="thumb fl-left">
                            <img src="admin/uploads/Product/<?php echo $item['product_thumb']?>" alt="">
                        </a>
                        <div class="info fl-right">
                            <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id']?>" title="" class="product-name"><?php echo $item['product_name']?></a>
                            <div class="price">
                                <span class="new"><?php echo number_format($item['price'])?>đ</span>
                                <span class="old">7.190.000đ</span>
                            </div>
                            <a href="" title="" class="buy-now">Mua ngay</a>
                        </div>
                    </li>

                <?php } ?>


            </ul>
        </div>
    </div>
    <div class="section" id="banner-wp">
        <div class="section-detail">
            <a href="" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>
</div>