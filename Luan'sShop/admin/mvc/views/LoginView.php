<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min copy.css">
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
    <style>
        #wp_regis{
            height: 800px;
        }
    </style>
    <div id="wp_regis" class="container-fluid bg-primary">
        <div class="row">
            <div class="col-md-6 bg-white mx-auto pb-3 mt-5 rounded">
                <h4>Đăng Nhập</h4>
                <form action="?controller=Login&action=LoginAction" method="post">                    
                    <div class="form-group">
                        <label for="usernameLogin">Tên đăng nhập</label>
                        <input type="text" id="usernameLogin" name="username" class="form-control">
                        <?php if (!empty($data['errorUsername'])) { ?>
                            <p class="text-danger"><?php echo $data['errorUsername'] ?></p>
                        <?php } ?>

                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Mật khẩu</label>
                        <input type="password" id="passwordLogin" name="password" class="form-control">
                        <?php if (!empty($data['errorPassword'])) { ?>
                            <p class="text-danger"><?php echo $data['errorPassword'] ?></p>
                        <?php } ?>
                        
                    </div>
                    <?php if (!empty($data['errorLogin'])) { ?>
                            <p class="text-danger"><?php echo $data['errorLogin'] ?></p>
                        <?php } ?>
                    <input type="submit" class="btn btn-primary btn-block " name="btn_login" value="Đăng nhập">
                    <?php if(isset($data['error'])){?>
                        <p class="text-danger"><?php echo $data['error']?></p>
                    <?php }?>
                </form>
               

            </div>
        </div>
    </div>
</body>

</html>