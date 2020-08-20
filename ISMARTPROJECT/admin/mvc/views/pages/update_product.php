
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Chỉnh sửa sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action ="?controller=Products&action=Update_Product&id=<?php echo $data['id']?>" method="POST" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name" value="<?php echo $data['product']['product_desc']?>">
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="product_code" id="product-code">
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price" value="<?php echo $data['product']['price']?>">
                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="product_desc" id="desc"></textarea>
                        <select name="cat">
                            <option value="">-- Chọn loại sản phẩm --</option>
                            <?php if($data['product']['cat_id']==1){?>
                            <option value="1" selected>Thời trang</option>

                            <?php } else if($data['product']['cat_id']==2){?>
                                <option value="2" selected>Điện tử</option>

                            <?php }?>
                        </select>
                        <label for="desc">Chi tiết</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb" value="<?php echo $data['product']['product_thumb']?>">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="<?php echo "uploads/".$data['product']['product_thumb']?>">
                        </div>
                        <label>Danh mục sản phẩm</label>
                        <select name="parent_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="1">Thể thao</option>
                            <option value="2">Xã hội</option>
                            <option value="3">Tài chính</option>
                        </select>
                        <label>Trạng thái</label>
                        <select name="status">
                            <option value="0">-- Chọn danh mục --</option>
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                        </select>
                        <button type="submit" name="btn-update-product" id="btn-submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
   