<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'mvc/views/blocks/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" action="?controller=Products&action=Update_Product&id=<?php echo $data['product']['id']?>">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name" value="<?php echo $data['product']['product_name']?>">
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code" value="<?php echo $data['product']['product_code']?>">
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price" value="<?php echo $data['product']['price']?>">
                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="product_desc" id="desc"><?php echo $data['product']['product_desc']?></textarea>
                        <label for="desc">Chi tiết</label>
                        <textarea name="product_intro" id="desc" class="ckeditor"><?php echo $data['product']['product_intro']?></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb" value="<?php echo $data['product']['product_thumb']?>">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img width="100px" src="<?php echo "uploads/Product/".$data['product']['product_thumb']?>">
                        </div>
                        <label>Danh mục sản phẩm</label>
                        <select name="cat_id">
                            <option value="">-- Chọn danh mục --</option>
                            <?php if($data['product']['cat_id']==1){?>
                                <option value="1" selected="selected">Thời trang</option>

                            <?php }else if($data['product']['cat_id']==2){?>
                            <option value="2" selected="selected">Điện tử</option>

                            <?php }?>
                        </select>
                        <label>Trạng thái</label>
                        <select name="status">
                            <option value="0">-- Chọn danh mục --</option>
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                        </select>
                        <button type="submit" name="btn_update_product" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>