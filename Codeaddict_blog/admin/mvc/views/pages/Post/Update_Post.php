<div id="content">
    <?php
    require "mvc/views/blocks/sidebar.php";

    ?>
    <div id="body">
        <div id="wp_add_post" class="container">
            <h1 class="font-black">UPDATE POST</h1>
            <form action="?controller=Post&action=Update_Post&id=<?php echo $data['post']['id'] ?>" method="post" id="form_add_post" enctype="multipart/form-data">
                <label for="title">Tiêu đề</label>
                <input type="text" name="post_title" id="title" value="<?php echo $data['post']['title'] ?>">
                <label for="title">Slug ( Friendly_url )</label>
                <input type="text" name="slug" id="slug" value="<?php echo $data['post']['slug'] ?>">
                <label for="post_desc">Mô tả</label>
                <input type="text" name="post_desc" id="post_desc" value="<?php echo $data['post']['desc'] ?>">
                <label for="desc">Nội dung</label>
                <textarea name="post_content" id="desc" class="ckeditor"><?php echo $data['post']['content'] ?></textarea>
                <input type="file" id="file" name="file" >
                <?php if (!empty($data['post']['img'])) { ?>
                    <div class="image" style="width:250px">

                        <img style="width: 100%;" src="<?php echo $data['post']['img'] ?>" alt="">
                    </div>
                <?php } ?>

                <label for="topic">Danh mục thể loại</label><br>
                <select name="topic_id" id="topic">
                    <option value="">---Choose type post---</option>
                    <?php foreach($data['list_topics'] as $item){?>
                        <option value="<?php echo $item['id']?>" <?php if ($data['post']['topic_id'] == $item['id']) {
                                            echo "selected=" . "selected";
                                        } ?>><?php echo $item['title']?></option>
                    <?php }?>
                    

                </select>
                <input type="submit" class="bg-success font-white" value="Update" name="btn_update_post">

            </form>


        </div>
    </div>
</div>