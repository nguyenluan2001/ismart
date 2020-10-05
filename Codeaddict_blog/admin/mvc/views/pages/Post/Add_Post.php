<div id="content">
    <?php
    require "mvc/views/blocks/sidebar.php";
    
    ?>
    <div id="body">
        <div id="wp_add_post" class="container">
            <h1 class="font-black">CREATE NEW POST</h1>
            <form action="?controller=Post&action=Add_Post" method="post" id="form_add_post" enctype="multipart/form-data">
                <label for="title">Tiêu đề</label>
                <input type="text" name="post_title" id="title">
                <label for="post_desc">Mô tả</label>
                <input type="text" name="post_desc" id="post_desc">
                <label for="desc">Nội dung</label>
                <textarea name="post_content" id="desc" class="ckeditor"></textarea>
                <input type="file" id="file" name="file">
                <label for="topic">Danh mục thể loại</label><br>
                <select name="topic_id" id="topic">
                    <option value="">---Choose type post---</option>
                    <?php foreach($data['list_topics'] as $item){?>
                        <option value="<?php echo $item['id']?>"><?php echo $item['title']?></option>

                    <?php }?>
                    

                </select>
                <input type="submit" class="bg-success font-white" value="Add" name="btn_add_post">

            </form>


        </div>
    </div>
</div>
