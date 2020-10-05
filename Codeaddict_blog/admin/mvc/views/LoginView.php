<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="wp_login">
        <form action="?controller=Login&action=Login" id="form_login" method="post">
            <h1 class="mt-0">LOGIN</h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <?php if(!empty($data['error']['username'])){?>
                <p class="font-danger"><?php echo $data['error']['username']?></p>
            <?php }?>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php if(!empty($data['error']['password'])){?>
                <p class="font-danger"><?php echo $data['error']['password']?></p>
            <?php }?>
            <?php if(!empty($data['error']['account'])){?>
                <p class="font-danger"><?php echo $data['error']['account']?></p>
            <?php }?>
            <input type="submit" value="Login" name="btn_login" id="btn_login" class="bg-success">
        </form>
    </div>
</body>
</html>