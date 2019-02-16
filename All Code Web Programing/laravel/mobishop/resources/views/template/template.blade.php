<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
          content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
@yield('title')
<!-- Bootstrap -->
    <link href="/view-page/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="/view-page/css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="/view-page/css/owl.carousel.css" rel="stylesheet">
    <link href="/view-page/css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="/view-page/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/view-page/css/jquery.desoslide.css"/>
    <link rel="stylesheet" type="text/css" href="/view-page/css/animate.min.css">
    <link href="/view-page/css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/view-page/css/jquery.rateyo.min.css">
    <link rel="stylesheet" href="/view-page/css/jquery-ui.css" type="text/css">

</head>

<body>
<!-- top-header-->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                <p class="top-text">Flexible Delivery, Fast Delivery.</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                <ul>
                    <li>0982650542 / +84</li>
                    <li>15130177@st.hcmuaf.edu.vn</li>
                </ul>
            </div>
        </div>
        <!-- /.top-header-->
    </div>
</div>
<!-- header-section-->
<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                <div class="logo">
                    <a href="/"><img src="/view-page/images/logo.png" alt=""> </a>
                </div>
            </div>
            <!-- /.logo -->
            <!-- search -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="search-bg">
                    <input type="text" class="form-control" placeholder="Search Here">
                    <button type="Submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <!-- /.search -->
            <!-- account -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="account-section">
                    <ul>
                        @if(Session::get('member')!= null)
                            <li><a href="#" class="title hidden-xs">{{Session::get('member')->name}}</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="/controller/template/action/logout" class="title hidden-xs">logout</a></li>
                        @endif

                        @if(Session::get('member')== null)
                            <li><a href="/login-page" class="title hidden-xs">Login</a></li>
                            <li class="hidden-xs">|</li><li><a href="/register-page" class="title hidden-xs">Register</a></li>
                            @endif
                            <li><a href="/cart-page" class="title"><i class="fa fa-shopping-cart"></i> <sup
                                        class="cart-quantity">1</sup></a>
                            </li>
                    </ul>
                </div>
                <!-- /.account -->
            </div>
            <!-- search -->
        </div>
    </div>
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- navigations-->
                    <div id="navigation">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li class="has-sub"><a href="#">Mobiles</a>
                                <ul>
                                    <li><a href="/product-page">Mobile List</a></li>
                                </ul>
                            </li>
                            <li><a href="/about-page">About</a>
                            </li>
                            <li class="has-sub"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="/blog-page">Redirect to blog page</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact-page">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navigations-->
            </div>
        </div>
    </div>
</div>
<!-- /. header-section-->
<!-- slider -->
@yield('slider')

@yield('content')


<div class="footer">
    <div class="container">
        <div class="row">
            <!-- footer-company-links -->
            <!-- footer-contact links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Contact Info </h3>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-text">Linh Trung - Thủ Đức - Hồ Chí Minh - Việt Nam</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-phone"></i></span>
                        <span class="contact-text">0982650542 / +84</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                        <span class="contact-text">vanthinhit310@gmail.com</span>
                    </div>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="arrow">
                        <li><a href="/">Home </a></li>
                        <li><a href="/about-page">About</a></li>
                        <li><a href="/product-page">Mobiles</a></li>
                        <li><a href="/blog-page">Blog</a></li>
                        <li><a href="/contact-page">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <!-- footer-policy-list-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Policy Info</h3>
                    <ul class="arrow">
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Cancellation &amp; Returns</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">T &amp; C</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-policy-list-links -->
            <!-- footer-social links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Connect With Us</h3>
                    <div class="ft-social">
                        <span><a href="#" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a></span>
                        <span><a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                        <span><a href="#" class="btn-social btn-googleplus"><i class="fa fa-google-plus"></i></a></span>
                        <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
                        <span><a href="#" class=" btn-social btn-pinterest"><i class="fa fa-pinterest-p"></i></a></span>
                        <span><a href="#" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
            <!-- /.footer-social links -->
        </div>
    </div>
    <!-- tiny-footer -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="payment-method alignleft">
                        <ul>
                            <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <p class="alignright">Copyright © All Rights Reserved 2020 Template Design by
                        <a href="https://easetemplate.com/" target="_blank" class="copyrightlink">EaseTemplate</a></p>
                </div>
            </div>
        </div>
        <!-- /. tiny-footer -->
    </div>
</div>
<!-- /.footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/view-page/js/jquery.min.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/view-page/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/view-page/js/menumaker.js" type="text/javascript"></script>
<script type="text/javascript" src="/view-page/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/view-page/js/sticky-header.js"></script>
<script type="text/javascript" src="/view-page/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/view-page/js/multiple-carousel.js"></script>
<script type="text/javascript" src="/view-page/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/view-page/js/jquery-ui.js"></script>
<script>
    // external js: isotope.pkgd.js

    $(function () {

        $('.isotope').isotope({
            itemSelector: '.post-masonry',
            masonry: {}
        });

    });
</script>
<script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_pin.png'

        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initMap">
</script>

<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            $('#cssmenu ul ul li:odd').addClass('odd');
            $('#cssmenu ul ul li:even').addClass('even');
            $('#cssmenu > ul > li > a').click(function () {
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if ($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    })(jQuery);
</script>

<script type="text/javascript" src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.rateyo.min.js"></script>
<script src="js/jquery.desoslide.js "></script>
<script type="text/javascript">
    $('#slideshow').desoSlide({
        thumbs: $('ul.slideshow_thumbs li > a'),
        effect: {
            provider: 'animate',
            name: 'fade'
        }

    });
</script>

<script type="text/javascript">
    $(function () {

        $("#rateYo").rateYo({
            rating: 3.6,
            starWidth: "16px"
        });

    });


</script>
</body>

</html>
