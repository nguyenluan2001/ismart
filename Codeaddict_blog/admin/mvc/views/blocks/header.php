<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">

    <script src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/js/app.js"></script>

    <!-- ------Carousel----- -->
    <link rel="stylesheet" href="slider/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="slider/owlcarousel/assets/owl.theme.default.min.css">
    <script src="slider/jquery.min.js"></script>
    <script src="slider/owlcarousel/owl.carousel.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Sansita+Swashed:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <script src="public/ckeditor/ckeditor.js"></script>



</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div id="logo">
                    <h1><a href="" class="font-family-logo">CODEADDICT</a></h1>
                </div>


                <div id="menu">
                    <div class="item"><a href="?controller=Post&action=List_Post">Home</a> </div>
                    <div class="item"><a href="">About</a></div>
                    <div class="item"><a href="">Services</a></div>
                    <div class="item">
                        <a href=""><?php echo $_COOKIE['user']?> <i class="fas fa-angle-down"></i> </a>
                        <div id="info_user">
                            <a href="1" class="font-black">Dashboard</a>
                            <a href="?controller=Logout&action=Logout" class="font-red">Logout</a>
                        </div>

                    </div>
                </div>
                <a href="" class="d-block font-white" id="menu_icon"><i class="fas fa-bars"></i>
                </a>


                <div id="menu_respon">
                    <div class="item"><a href="?controller=Home&action=Index">Home</a> </div>
                    <div class="item"><a href="">About</a></div>
                    <div class="item"><a href="">Services</a></div>
                    <div class="item">
                        <a href="">Thanh Luan <i class="fas fa-angle-down"></i> </a>
                        <div id="info_user" class="d-none">
                            <a href="https://htmlcolorcodes.com/" class="font-black">Dashboard</a>
                            <a href="Logout" class="font-red">Logout</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>