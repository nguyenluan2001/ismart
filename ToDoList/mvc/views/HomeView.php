<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../UNITOP.VN/plugin/font-awesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100;0,200;0,300;0,500;0,531;1,100;1,200;1,500&display=swap" rel="stylesheet">
    <script src="public/js/app.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="todo_wp">
        <?php
        require "mvc/views/pages/{$data['pages']}.php";
        ?>

   
    <div id="footer">
        <h3 class="user_name">Hello <?php echo $_SESSION['USER']['fullname']?></h3>
        <a id="logout" href="?controller=Logout&action=Logout"><i class="fas fa-sign-out-alt"></i></a><br>
 
    </div>



    </div>

</body>

</html>