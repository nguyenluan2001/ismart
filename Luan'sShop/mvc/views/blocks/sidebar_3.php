<div class="sidebar fl-left">
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
            <a href="?page=detail_blog_product" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>
</div>