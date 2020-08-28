<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý ISMART</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="?controller=Home&action=Index" title="" id="logo" class="fl-left">ADMIN</a>
                        <ul id="main-menu" class="fl-left">
                            <li>
                                <a href="?controller=Pages&action=Index" title="">Trang</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?controller=Pages&action=Add_Page" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Pages&action=Index" title="">Danh sách trang</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?controller=Posts&action=Index" title="">Bài viết</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?controller=Posts&action=Add_Post" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Posts&action=Index" title="">Danh sách bài viết</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Posts&action=Show_List_Cat" title="">Danh mục bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?controller=Products&action=Index" title="">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?controller=Products&action=Add_Product" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Products&action=Index" title="">Danh sách sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Products&action=Show_List_Cat" title="">Danh mục sản phẩm</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?controller=Cart&action=Index" title="">Bán hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?controller=Cart&action=Index" title="">Danh sách đơn hàng</a> 
                                    </li>
                                    <li>
                                        <a href="?controller=Cart&action=Show_List_Customers" title="">Danh sách khách hàng</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=menu" title="">Menu</a>
                            </li>
                        </ul>
                        <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                            <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div id="thumb-circle" class="fl-left">
                                    <img src="public/images/img-admin.png">
                                </div>
                                <h3 id="account" class="fl-right"><?php echo $_SESSION['admin']['fullname']?></h3>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?controller=Admin&action=Show_Info" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                <li><a href="?controller=Admin&action=Logout" title="Thoát">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                </div>