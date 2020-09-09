<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php require 'mvc/views/blocks/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">THÔNG TIN ĐƠN HÀNG</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <p><strong>Họ tên: </strong><?php echo $data['data_order']['info']['fullname']?></p>
                <p><strong>Email: </strong><?php echo $data['data_order']['info']['email']?></p>
                <p><strong>Địa chỉ: </strong><?php echo $data['data_order']['info']['address']?></p>
                <p><strong>Số điện thoại: </strong><?php echo $data['data_order']['info']['phone']?></p>
                <p><strong>Ghi chú: </strong><?php echo $data['data_order']['info']['note']?></p>
                <p><strong>Hình thức thanh toán: </strong><?php echo $data['data_order']['info']['payment-method']?></p>
                <p><strong>Danh sách sản phẩm: </strong>
                <?php foreach($data['data_order']['list_products'] as $item){?>
                    <p ><?php echo $item['product_name']." x ".$item['qty']." = ".number_format($item['sub_total'])?></p>
                <?php }?>
                <p><strong>Số lượng: </strong><?php echo $data['data_order']['info']['num_order']?></p>
                <p><strong>Tổng tiền: </strong><?php echo number_format($data['data_order']['info']['total'])?></p>

            
            
            </p>



                
            </div>
          
        </div>
    </div>
</div>