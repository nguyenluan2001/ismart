<div id="content">
       <?php
       require "mvc/views/blocks/sidebar.php";
       ?>
        <div id="body">
                <div class="container">
                        <a href="?controller=Topic&action=Add_Topic" id="btn_add" class="bg-success">Add Topic</a>
                        <table>
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Topic</th>
                                                <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php $count=1; foreach($data['list_topics'] as $item){?>
                                                <tr>
                                                <td><?php echo $count?></td>
                                                <td><?php echo $item['title']?></td>
                                                <td><?php echo $_COOKIE['user']?></td>
                                                <td>
                                                        <a href="?controller=Topic&action=Update_Topic&id=<?php echo $item['id']?>" class="bg-success">Edit</a>
                                                        <a onclick="return confirm('Do you want to delete this?')" href="?controller=Topic&action=Delete_Topic&id=<?php echo $item['id']?>" class="bg-danger">Delete</a>
                                                </td>
                                        </tr>

                                        <?php $count++; }?>
                                       
                                        
                                </tbody>
                        </table>

                </div>
        </div>
</div>
<!-- </div>

<body> -->