<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'mvc/views/blocks/sidebar.php'; ?>
        <div id="content" class="fl-right">      
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật trang</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="page_title" id="title" value="<?php echo $data['page']['page_title']?>">
                        <label for="title">Slug ( Friendly_url )</label>
                        <input type="text" name="slug" id="slug" value="<?php echo $data['page']['slug']?>">
                        <label for="desc">Nội dung</label>
                        <textarea name="page_content" id="desc" class="ckeditor"><?php echo $data['page']['page_content']?></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>
                        <button type="submit" name="btn_update_page" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>