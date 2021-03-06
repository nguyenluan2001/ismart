<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'mvc/views/blocks/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST"action="?controller=Posts&action=Add_Post" enctype="multipart/form-data">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="post_title" id="title">
                        <label for="title">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug">
                        <label for="post_desc">Mô tả</label>
                        <input type="text" name="post_desc" id="post_desc">
                        <label for="desc">Nội dung</label>
                        <textarea name="post_content" id="desc" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>
                        <label>Danh mục cha</label>
                        <select name="post_cat_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="1">Thể thao</option>
                            <option value="2">Xã hội</option>
                            <option value="3">Tài chính</option>
                        </select>
                        <button type="submit" name="btn_add_post" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>