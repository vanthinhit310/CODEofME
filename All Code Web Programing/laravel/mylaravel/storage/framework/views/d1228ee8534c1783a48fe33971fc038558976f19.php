<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog của tôi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/newspublic/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/newspublic/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="/newspublic/css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="/newspublic/vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/newspublic/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/newspublic/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



    <link rel="stylesheet" href="/video/css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/video/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="/video/css/jquery.countdown.css"/>
    <link rel="stylesheet" href="/video/css/jquery-ui.css"/>


    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=121168825488875&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                                <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="/" class="navbar-brand">BÁC TÂN Blog</a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                        aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <?php if(Session::get('account')== null): ?>
                        <li class="nav-item"><a href="/" class="nav-link active ">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="link" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chuyên mục
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link dropdown-item" href="/cam-nang"> Cẩm nang</a>
                                    <a class="nav-link dropdown-item" href="/huong-dan"> Hướng dẫn lối chơi</a>
                                    <a class="nav-link dropdown-item" href="/review"> Đánh giá</a>
                                    <a class="nav-link dropdown-item" href="/hinh-anh"> Hình ảnh Cosplay</a>
                                    <a class="nav-link dropdown-item" href="/video"> Video Highlight</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="/video-page" class="nav-link ">Video</a>
                        </li>
                        <li class="nav-item"><a href="/picture-page" class="nav-link ">Hình ảnh</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link ">Contact</a>
                        </li>
                        <li class="nav-item"><a href="/admin/login-page" class="nav-link "><i class="fa fa-user-circle-o"></i></a>
                    <?php endif; ?>
                    <?php if(Session::get('account')!= null): ?>
                        <li class="nav-item"><a href="/" class="nav-link active ">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="link" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chuyên mục
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link dropdown-item" href="/cam-nang"> Cẩm nang</a>
                                    <a class="nav-link dropdown-item" href="/huong-dan"> Hướng dẫn lối chơi</a>
                                    <a class="nav-link dropdown-item" href="/review"> Đánh giá</a>
                                    <a class="nav-link dropdown-item" href="/hinh-anh"> Hình ảnh Cosplay</a>
                                    <a class="nav-link dropdown-item" href="/video"> Video Highlight</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="/video-page" class="nav-link ">Video</a>
                        </li>
                        <li class="nav-item"><a href="/picture-page" class="nav-link ">Hình ảnh</a>
                        </li>
                        <li class="nav-item"><a href="/post-page" class="nav-link ">Contact</a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" type="link" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user">
                                        <strong>  <?php echo e(Session::get('account')->tennguoidung); ?></strong></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link dropdown-item" href="#"> <i class="fa fa-info-circle"> Thông
                                            tin</i></a>
                                    <a class="nav-link dropdown-item" target="_blank" href="/admin/"><i class="fa fa-arrows"> Tới trang
                                            quản trị</i></a>
                                    <a class="nav-link dropdown-item" href="/controller/admin/logout"><i class="fa fa-sign-out"> Đăng
                                            xuất</i></a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php echo $__env->yieldContent('content'); ?>
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <h6 class="text-white">Bootstrap Blog</h6>
                </div>
                <div class="contact-details">
                    <p>53 Broadway, Broklyn, NY 11249</p>
                    <p>Phone: (020) 123 456 789</p>
                    <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
                    <ul class="social-menu">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menus d-flex">
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy &amp; Policy</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-posts"><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span>
                            </div>
                        </div>
                    </a><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span>
                            </div>
                        </div>
                    </a><a href="#">
                        <div class="post d-flex align-items-center">
                            <div class="title"><strong>Best coffee shops in Sydney</strong><span class="date last-meta">October 26, 2016</span>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2017. All rights reserved. Your great site.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Template By <a href="https://bootstraptemple.com" class="text-white">Bootstrap Temple</a>
                        <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="/newspublic/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/newspublic/vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="/newspublic/vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
<script src="/newspublic/js/front.js"></script>

</body>
</html>
