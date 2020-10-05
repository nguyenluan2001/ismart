<div id="content">
    <?php
    require "mvc/views/blocks/sidebar.php";

    ?>
    <div id="body">
        <div id="wp_add_post" class="container">
            <h1 class="font-black">UPDATE POST</h1>
            <form action="?controller=Topic&action=Update_Topic&id=<?php echo $data['topic']['id'] ?>" method="post" id="form_add_post">
                <label for="title">Tiêu đề</label>
                <input type="text" name="topic_title" id="title" value="<?php echo $data['topic']['title'] ?>">
                <label for="icon">Icon</label>
                <?php echo $data['topic']['icon']?>
                <input type="text" name="topic_icon" id="icon" >
                <!-- <label for="title">Slug ( Friendly_url )</label>
                <input type="text" name="slug" id="slug" value="<?php echo $data['post']['slug'] ?>">
                <label for="post_desc">Mô tả</label>
                <input type="text" name="post_desc" id="post_desc" value="<?php echo $data['post']['desc'] ?>">
                <label for="desc">Nội dung</label>
                <textarea name="post_content" id="desc" class="ckeditor"><?php echo $data['post']['content'] ?></textarea>
                <label for="topic">Danh mục thể loại</label><br>
                <select name="topic_id" id="topic">
                    <option value="">---Choose type post---</option>
                    <option value="1" <?php if ($data['post']['topic_id'] == 1) {
                                            echo "selected=" . "selected";
                                        } ?>>Sport</option>
                    <option value="2" <?php if ($data['post']['topic_id'] == 2) {
                                            echo "selected=" . "selected";
                                        } ?>>Fashion</option>
                    <option value="3" <?php if ($data['post']['topic_id'] == 3) {
                                            echo "selected=" . "selected";
                                        } ?>>World</option>
                    <option value="4" <?php if ($data['post']['topic_id'] == 4) {
                                            echo "selected=" . "selected";
                                        } ?>>Technology</option>

                </select> -->
                <input type="submit" class="bg-success font-white" value="Update" name="btn_update_topic">

            </form>


        </div>
    </div>
</div>