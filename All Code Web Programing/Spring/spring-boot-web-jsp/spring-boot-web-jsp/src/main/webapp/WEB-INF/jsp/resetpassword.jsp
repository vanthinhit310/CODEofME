<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cập nhật mật khẩu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!-- Code bắt lỗi Jquery -->
<script>
    $(document).ready(function () {
        $('#updatepassword_form').on('submit', function () {
            if ($('#code').val() == '' || $('#code').val() == undefined) {
                $('#err_code').html('Vui lòng nhập mật khẩu mới');
                $('#code').css('border', 'solid 1px red');
                return false;
            }
            if ($('#updatepassword_newpassword').val() == '' || $('#updatepassword_newpassword').val() == undefined) {
                $('#err_updatepassword_newpassword').html('Vui lòng nhập mật khẩu mới');
                $('#updatepassword_newpassword').css('border', 'solid 1px red');
                return false;
            }
            if ($('#updatepassword_confirmpassword').val() == '' || $('#updatepassword_confirmpassword').val() == undefined) {
                $('#err_updatepassword_confirmpassword').html('Vui lòng nhập lại mật khẩu mới');
                $('#updatepassword_confirmpassword').css('border', 'solid 1px red');
                return false;
            }
            if ($('#updatepassword_confirmpassword').val() != $('#updatepassword_newpassword').val()) {
                $('#err_updatepassword_confirmpassword').html('Mật khẩu không khớp. Xin kiểm tra lại');
                $('#updatepassword_confirmpassword').css('border', 'solid 1px red');
                return false;
            }
            return true;
        });
        $('#updatepassword_form').on('keyup', function () {
            if ($('#code').val() != '') {
                $('#err_code').html('');
                $('#code').css('border', 'solid 2px green');
            }

            if ($('#updatepassword_newpassword').val() != '') {
                $('#err_updatepassword_newpassword').html('');
                $('#updatepassword_newpassword').css('border', 'solid 2px green');
            }
            if ($('#updatepassword_confirmpassword').val() != '') {
                $('#err_updatepassword_confirmpassword').html('');
                $('#updatepassword_confirmpassword').css('border', 'solid 2px green');
            }
        })
    });
</script>

<body>
<header id="header">
    <!--header-->
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="images/home/logo.png" alt=""/></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/login_page"><i class="fa fa-lock"></i> Đăng nhập/Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->

<section id="form">
    <!--form-->
    <div class="container">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="login-form">
                <!--login form-->
                <h2 style="text-align:center">Cập nhật mật khẩu mới</h2>
                <form id="updatepassword_form" action="/Account/capnhatmatkhau">

                    <input style="display: none" name="email" value="${email}"/>

                    <input id="code" name="code" type="text" placeholder="Mã xác nhận"/>
                    <p style="color:red" id="err_code"></p>

                    <input id="updatepassword_newpassword" name="updatepassword_newpassword" type="password"
                           placeholder="Mật khẩu mới"/>
                    <p style="color:red" id="err_updatepassword_newpassword"></p>

                    <input id="updatepassword_confirmpassword" name="updatepassword_confirmpassword" type="password"
                           placeholder="Nhập lại mật khẩu mới"/>
                    <p style="color:red" id="err_updatepassword_confirmpassword"></p>

                    <button style="margin-left: 120px" type="submit" class="btn btn-default">Cập nhật</button>
                </form>
            </div>
            <!--/login form-->
        </div>
    </div>
</section>
<footer id="footer">
    <!--Footer-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address"/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Get the most recent updates from <br/>our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank"
                                                           href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer>
<!--/Footer-->
</body>

</html>