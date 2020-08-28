<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Sản phẩm làm đẹp da</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <?php if (empty($_SESSION['cart']['buy'])) { ?>
                    <p>Không có sản phẩm nào trong giỏ hàng</p>
                <?php } else { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart']['buy'] as $item) { ?>
                                <tr>
                                    <td>HCA00031</td>
                                    <td>
                                        <a href="" title="" class="thumb">
                                            <img src="<?php echo "admin/uploads/Product/" . $item['product_thumb'] ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="?controller=Products&action=Detail_Product&id=<?php echo $item['id'] ?>" title="" class="name-product"><?php echo $item['product_name'] ?></a>
                                    </td>
                                    <td><?php echo number_format($item['price']) ?></td>
                                    <td>
                                        <input type="number" id="num_order" name="num-order" value="<?php echo $item['qty'] ?>" class="num-order" data-id=<?php echo $item['id']?> min="0" max="20">
                                    </td>
                                    <td><p id="sub_total_<?php echo $item['id']?>"><?php echo number_format($item['sub_total']) ?></p></td>
                                    <td>
                                        <a href="?controller=Cart&action=Delete&id=<?php echo $item['id'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span id="total"><?php echo number_format($_SESSION['cart']['info']['total']) ?></span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                            <a href="?controller=Cart&action=Check_Out" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                <?php } ?>

            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                <a href="?controller=Cart&action=Delete" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>