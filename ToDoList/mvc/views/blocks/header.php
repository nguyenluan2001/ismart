
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <!-- <base href="http://localhost/MVC/"> -->



    <script src="public/thư viện js/jquery-3.4.1.slim.min.js"></script>
    <script src="public/thư viện js/popper.min.js"></script>
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="public/js/app.js"></script>  -->

    <!-- <script src="public/JQUERY/import/js/jquery.js"></script> -->
   
    <script>
        $(document).ready(function() {
            $("input#num_order").change(function() {
                var id = $(this).attr('data-id');
                var num_order = $(this).val();
                var price = $("#price_"+id).text();
                var data = {
                    'id': id,
                    'num_order': num_order,
                    'price': price
                };

                $.ajax({
                    url:'?controller=cart&action=update_ajax',
                    method: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                      $(this).val(data.num_order);
                      $("#sub_total_"+id).text(data.sub_total);
                      $("#total_num_order").text(data.total_num_order);
                      $("#total").text(data.total);

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        // alert(xhr.status);
                        // alert(thrownError);
                        console.warn(xhr.responseText)
                    }
                })
            })
        })
    </script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <div id="header" class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav navbar navbar-dark navbar-expand-xl">
                                <a href="?controller=home&action=show" class="navbar-brand">LUAN'S SHOP</a>
                                <button class="navbar-toggler" data-toggle="collapse" data-target="#main_menu">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="main_menu">
                                    <div class="navbar-nav">
                                        <div class="nav-item"><a href="?controller=home&action=show" class="nav-link">Trang chủ</a></div>
                                        <div class="nav-item"><a href="?controller=pages&action=show&id=1" class="nav-link">Giới thiệu</a></div>
                                        <div class="nav-item"><a href="?controller=products&action=show&id=1" class="nav-link">Thời trang</a></div>
                                        <div class="nav-item"><a href="?controller=products&action=show&id=2" class="nav-link">Điện tử</a></div>
                                        <div class="nav-item"><a href="?controller=pages&action=show&id=1" class="nav-link">Liên hệ</a></div>
                                        <div class="nav-item"><a href="?controller=cart&action=show" class="nav-link">Giỏ hàng</a></div>                                       
                                        <div class="nav-item"><a href="?controller=logout&action=Logout" class="nav-link">Logout</a></div>




                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>