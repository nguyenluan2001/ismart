<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Luan'sShop/public/css/bootstrap/bootstrap.min copy.css">
    <!-- <base href="http://localhost/MVC/"> -->

    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100;0,200;0,300;0,500;0,531;1,100;1,200;1,500&display=swap" rel="stylesheet">


    <script src="public/thư viện js/jquery-3.4.1.slim.min.js"></script>
    <script src="public/thư viện js/popper.min.js"></script>
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="public/js/app.js"></script>  -->

    <!-- <script src="public/JQUERY/import/js/jquery.js"></script> -->


    <script src="public/bootstrap/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Grandstander', cursive;
        }

        a {
            text-decoration: none;
        }

        h4 {
            margin-top: 0px;
        }

        #wrapper {
            width: 100%;
            height: 690px;
            background: wheat;
            padding-top: 200px;
            box-sizing: border-box;
        }

        #wp_login {
            width: 30%;
            margin: 0px auto;
            background: whitesmoke;
            text-align: center;
            padding: 10px 0px;
            border-radius: 5px;



        }

        input {
            margin-bottom: 10px;
            width: 60%;
            height: 30px;
            border-radius: 5px;
            padding-left: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            font-size: 20px;
            font-family: 'Grandstander', cursive;

        }

        p.register_success{
            color: #4CAF50;
        }
        p.error{
            color: red;
        }
    </style>
    <div id="wrapper" class="container-fluid bg-primary">
        <div id="wp_login">
            <h4>Đăng Nhập</h4>

            <form action="?controller=Register&action=Register" method="post" id="login_form">
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Fullname"><br>
                <?php if(!empty($data['error']['fullname'])){?>
                    <p class="error"><?php echo $data['error']['fullname']?></p>
                <?php }?>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username"><br>
                <?php if(!empty($data['error']['username'])){?>
                    <p class="error"><?php echo $data['error']['username']?></p>
                <?php }?>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"><br>
                <?php if(!empty($data['error']['password'])){?>
                    <p class="error"><?php echo $data['error']['password']?></p>
                <?php }?>
                <input type="submit" class="btn btn-primary btn-block " name="btn_register" value="Register"><br>
                <a href="?controller=Login&action=Login">Login</a>
                <?php if (isset($_SESSION['is_register'])) { ?>
                    <p class="register_success">Register Success</p>
                <?php }else if(isset($data['error']['user_existed'])){ ?>
                    <p class="error"><?php echo $data['error']['user_existed']?></p>

                <?php }?>
            </form>
        </div>




    </div>
</body>

</html>