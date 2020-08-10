<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min copy.css">
    <link rel="stylesheet" href="public/style.css">
    <!-- <base href="http://localhost/MVC/"> -->



    <script src="public/thư viện js/jquery-3.4.1.slim.min.js"></script>
    <script src="public/thư viện js/popper.min.js"></script>
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="public/js/app.js"></script>  -->

    <!-- <script src="public/JQUERY/import/js/jquery.js"></script> -->
    

    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid bg-primary" id="form">
        <div class="row ">
            <div class="col-md-6 bg-white mx-auto mt-5 rounded">
                <h4>Đăng nhập</h4>
                <form action="?controller=Login&action=LoginAction" method="post">
                    <div class="form-group mb-3">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" id="username" class="form-control" name="username">
                        <?php if(isset($data['error']['username'])){?>
                            <p class="text-danger"><?php echo $data['error']['username'] ?></p>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Mật khẩu</label>
                        <input type="password" id="password" class="form-control" name="password">
                        <?php if(isset($data['error']['password'])){?>
                            <p class="text-danger"><?php echo $data['error']['password'] ?></p>
                        <?php }?>
                    </div>
                    <?php if(isset($data['NotExist'])){?>
                        <p class="text-danger"><?php echo $data['NotExist']?></p>

                    <?php }?>
                    <input type="submit" class="btn btn-primary btn-block " value="Đăng nhập" name="btn_login">
                    <div id="more" class="text-center mb-3">
                        <a href="?controller=ResetPass&action=ResetPassAction">Quên mật khẩu | </a>
                        <a href="?controller=Register&action=RegisterAction">Đăng kí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>