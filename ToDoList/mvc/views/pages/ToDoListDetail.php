<div id="wp_detail_table">
<h2 class="title"><?php echo $data['table']['title']?></h2>
<a id="home" href="?controller=Home&action=Index"><i class="fas fa-home"></i></a>


        <div id="add_mission">
            <form action="?controller=Mission&action=Add_Mission&id=<?php echo $data['type_mission_id']?>" method="POST">
                <input type="text" name="mission" placeholder="Write your mission" id="input_box">
                <input type="submit" name="btn_add_mission" value="Add" id="btn_add_mission">

            </form>
            <?php if(isset($_SESSION['error_add_mission'])){?>
                <p class="error_add_mission"><?php echo $_SESSION['error_add_mission'] ?></p>
            <?php }?>


        </div>
        <div id="show_mission">
            <h2 class="title">TO DO</h2>

            <?php if (empty($data['list_missions'])) { ?>
                <p><?php echo "Không có nhiệm vụ nào" ?></p>
                <?php } else {
                foreach ($data['list_missions'] as $item) { ?>
                    <div class="mission_item">

                        <div class="content">
                            <p id="title_mission"><?php echo $item['title'] ?></p>
                            <p><?php echo $item['created_at'] ?></p>
                        </div>

                        <div class="action">
                            <a href="" id="edit"><i class="fas fa-edit"></i></a>
                            <a onclick="return confirm('Do you want to delele this?')" href="?controller=Mission&action=Delete_Mission&id=<?php echo $item['id']?>" id="delete"><i class="far fa-trash-alt"></i></a>
                            <a style="color:red" href="?controller=Mission&action=Done_Mission&id=<?php echo $item['id']?>" id="done"><i class="far fa-check-circle"></i></a>

                        </div>



                    </div>
                    <div id="update_mission">
                        <a href="" id="close_update"><i class="far fa-window-close"></i></a>
                        <form action="?controller=Mission&action=Update_Mission&id=<?php echo $item['id']?>&type_mission_id=<?php echo $data['type_mission_id']?>" method="POST">
                            <label for="">Update Mission</label>
                            <input type="text" id="update_box" name="update_text">
                            <input type="submit" id="btn_update_mission" name="btn_update_mission" value="Update">

                        </form>
                    </div>




                <?php } ?>


            <?php } ?>
        </div>
        <div id="done_mission">
            <h2 class="title">Done</h2>
            <?php if (empty($data['list_done_missions'])) { ?>
                <p><?php echo "Chưa xong cái nào hết!!!" ?></p>
                <?php } else {
                foreach ($data['list_done_missions'] as $item) { ?>
                    <div class="mission_item">

                        <div class="content">
                            <p><?php echo $item['title'] ?></p>
                            <p><?php echo $item['done_at'] ?></p>
                        </div>

                        <div class="action">
                            <a href="" id="edit"><i class="fas fa-edit"></i></a>
                            <a  href="?controller=Mission&action=Delete_Mission&id=<?php echo $item['id']?>" id="delete"><i class="far fa-trash-alt"></i></a>
                            <a style="color:#4CAF50" href="?controller=Mission&action=Done_Mission&id=<?php echo $item['id']?>" id="done"><i class="far fa-check-circle"></i></a>

                        </div>



                    </div>
                    <div id="update_mission">
                        <a href="" id="close_update"><i class="far fa-window-close"></i></a>
                        <form action="?controller=Mission&action=Update_Mission&id=<?php echo $item['id']?>" method="POST">
                            <label for="">Update Mission</label>
                            <input type="text" id="update_box" name="update_text">
                            <input type="submit" id="btn_update_mission" name="btn_update_mission" value="Update">

                        </form>
                    </div>




                <?php } ?>


            <?php } ?>
        </div>
        <div class="clear_fix"></div>
   
</div>
        