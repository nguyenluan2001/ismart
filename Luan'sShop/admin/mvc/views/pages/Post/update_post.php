<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'mvc/views/blocks/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật bài viết</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?controller=Posts&action=Update_Post&id=<?php echo $data['post']['id']?>" enctype="multipart/form-data">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="post_title" id="title" value="<?php echo $data['post']['post_title'] ?>">
                        <label for="title">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug" value="<?php echo $data['post']['slug'] ?>">
                        <label for="desc">Nội dung</label>
                        <textarea name="post_content" id="desc" class="ckeditor"> <?php echo $data['post']['post_content'] ?></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>
                        <label>Danh mục cha</label>
                        <select name="post_cat_id">
                            <option value="">-- Chọn danh mục --</option>
                            <?php if ($data['post']['cat_id'] == 1) { ?>
                                <option value="1" selected="selected">Thể thao</option>

                            <?php } else if ($data['post']['cat_id'] == 2) { ?>
                                <option value="2" selected="selected">Xã hội</option>

                            <?php } else if ($data['post']['cat_id'] == 3) { ?>
                                <option value="3" selected="selected">Tài chính</option>

                            <?php } ?>
                        </select>
                        <button type="submit" name="btn_update_post" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>