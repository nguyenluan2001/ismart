<div id="content">
    <?php
    require "mvc/views/blocks/sidebar.php";
    
    ?>
    <div id="body">
        <div id="wp_add_post" class="container">
            <h1 class="font-black">CREATE NEW TOPIC</h1>
            <form action="?controller=Topic&action=Add_Topic" method="post" id="form_add_post">
                <label for="title">Tiêu đề</label>
                <input type="text" name="topic_title" id="title">
                <label for="icon">Icon</label>
                <input type="text" name="topic_icon" id="icon">
                <!-- <label for="post_desc">Mô tả</label>
                <input type="text" name="post_desc" id="post_desc">
                <label for="desc">Nội dung</label>
                <textarea name="post_content" id="desc" class="ckeditor"></textarea>
                <label for="topic">Danh mục thể loại</label><br>
                <select name="topic_id" id="topic">
                    <option value="">---Choose type post---</option>
                    <option value="1">Sport</option>
                    <option value="2">Fashion</option>
                    <option value="3">World</option>
                    <option value="4">Technology</option>

                </select> -->
                <input type="submit" class="bg-success font-white" value="Add" name="btn_add_topic">

            </form>


        </div>
    </div>
</div>
