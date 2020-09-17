<div id="wp_table">
    <h2 class="title">LIST</h2>
    <div id="type_mission">
        <form action="?controller=Table&action=Add_Table" method="POST">
            <input type="text" id="table" name="table_name" placeholder="Create table">
            <input type="submit" name="btn_add_table" value="Add" id="btn_add_table">
        </form>
        <?php if (isset($_SESSION['error_add_table'])) { ?>
            <p class="error_add_table"><?php echo $_SESSION['error_add_table'] ?></p>
        <?php } ?>
        <?php $count=1; foreach ($data['list_type_missions'] as $item) { ?>
            <div class="table_item">
                <span style="font-size:30px"><?php echo $count ?>/ </span>
                <a class="table_name" href="?controller=Home&action=Detail_Type_Mission&type_mission_id=<?php echo $item['id'] ?>"> <?php echo $item['title'] ?></a>
                <a href="?controller=Table&action=Delete_Table&id=<?php echo $item['id']?>" class="delete_table"><i class="fas fa-times"></i></a>

            </div>
        <?php $count++;} ?>

    </div>




</div>