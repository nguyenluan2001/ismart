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

        input[type="text"],input[type="password"],input[type="submit"] {
            font-size: 20px;
            font-family: 'Grandstander', cursive;

        }

        #login_form {}
    </style>
    <div id="wrapper" class="container-fluid bg-primary">
        <div id="wp_login">
            <h4>Đăng Nhập</h4>

            <form action="?controller=Login&action=Login" method="post" id="login_form">

                <input type="text" id="usernameLogin" name="username" class="form-control" placeholder="Username"><br>
                <input type="password" id="passwordLogin" name="password" class="form-control" placeholder="Password"><br>
                <input type="submit" class="btn btn-primary btn-block " name="btn_login" value="Login"><br>
                <a href="?controller=Register&action=Register">Register</a>
                <?php if (isset($data['error'])) { ?>
                    <p class="text-danger"><?php echo $data['error'] ?></p>
                <?php } ?>
            </form>
        </div>




    </div>
</body>

</html>