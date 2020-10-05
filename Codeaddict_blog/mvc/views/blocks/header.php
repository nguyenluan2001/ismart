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




</head>

<body>
   

    </style>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="A0kp7fyD"></script>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div class="wp_menu">
                    <div id="logo">
                        <h1><a href="" class="font-family-logo">CODEADDICT</a></h1>
                    </div>
                    <div id="menu">
                        <div class="item"><a href="Home">Home</a> </div>
                        <div class="item"><a href="">About</a></div>
                        <div class="item"><a href="">Services</a></div>
                        <div class="item">
                            <a href="">Thanh Luan <i class="fas fa-angle-down"></i> </a>
                            <div id="info_user">
                                <a href="1" class="font-black">Dashboard</a>
                                <a href="2" class="font-red">Logout</a>
                            </div>

                        </div>
                    </div>
                    <a href="" class="d-block font-white" id="menu_icon"><i class="fas fa-bars"></i>
                    </a>
                </div>

                <div id="menu_respon">
                    <div class="item"><a href="?controller=Home&action=Index">Home</a> </div>
                    <div class="item"><a href="">About</a></div>
                    <div class="item"><a href="">Services</a></div>
                    <div class="item">
                        <a href="">Topics <i class="fas fa-angle-down"></i> </a>
                        <div id="list_topic" class="d-none">
                            <?php foreach($_SESSION['list_topics'] as $item){?>
                                <a href="<?php echo $item['title']."-"?><?php echo $item['id']?>" class="d-block"><?php echo $item['title']?></a>
                            <?php }?>
                        </div>

                    </div>
                    <div class="item">
                        <a href="">Thanh Luan <i class="fas fa-angle-down"></i> </a>
                        <div id="info_user" class="d-none">
                            <a href="https://htmlcolorcodes.com/" class="font-black">Dashboard</a>
                            <a href="Logout" class="font-red">Logout</a>
                        </div>

                    </div>
                    <i class="fas fa-times"></i>
                   
                </div>
            </div>

        </div>
