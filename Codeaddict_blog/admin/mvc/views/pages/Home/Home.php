<div id="content">
       <?php
       require "mvc/views/blocks/sidebar.php";
       ?>
        <div id="body">
                <div class="container">
                        <a href="?controller=Post&action=Add_Post" id="btn_add_post" class="bg-success">Add Post</a>
                        <table>
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php $count=1; foreach($data['list_posts'] as $item){?>
                                                <tr>
                                                <td><?php echo $count?></td>
                                                <td><?php echo $item['title']?></td>
                                                <td>luannguyen</td>
                                                <td>
                                                        <a href="?controller=Post&action=Update_Post&id=<?php echo $item['id']?>" class="bg-success">Edit</a>
                                                        <a onclick="return confirm('Do you want to delete this?')" href="?controller=Post&action=Delete_Post&id=<?php echo $item['id']?>" class="bg-danger">Delete</a>
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