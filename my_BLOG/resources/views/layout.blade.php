<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <link rel="shortcut icon" type="image/x-icon" href="page/css/images/favicon.ico"/>
    <link rel="stylesheet" href="page/css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="page/css/flexslider.css" type="text/css" media="all"/>
    <script src="page/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="page/js/modernizr.custom.js"></script>
    <![endif]-->
    <script src="page/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="page/js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/demo.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#btnRe').on('click', function () {
                $.ajax({
                    url: '/controller/processing/register',
                    data: {
                        fullname: $('#fullname').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        '_token': '{{csrf_token()}}'
                    },
                    type: "POST",
                    success: function (data) {
                        if (data.result === 'success') {
                            $("#modal").hide();
                            swal({
                                title: "Xin chúc mừng!",
                                text: "Bạn đã đăng kí thành công!",
                                icon: "success",
                                button: "Xác nhận!",
                            });
                            $('#fullname').val('');
                            $('#email').val('');
                            $('#password').val('');
                        }
                    }
                })
            });
            $('#btnDN').on('click', function () {
                $('#tb').html('Đang đăng nhập ... ');
                $.ajax({
                    url: '/controller/processing/login',
                    data: {
                        mail: $('#mail').val(),
                        pass: $('#pass').val(),
                    },
                    type: "POST",
                    success: function (data) {

                        if (data.result === 'success') {
                            window.location.href = "/";
                        } else if (data.result === 'failure') {
                            $('#mail').val('');
                            $('#pass').val('');
                            $('#tb').html('Tài khoản hoặc mật khẩu không đúng');
                        }
                    }
                })
            })
        });

    </script>
</head>
<body>
<div id="wrapper">

    <!-- header -->
    <header class="header">
        <!-- shell -->
        <div class="shell">
            <h1 id="logo"><a href="#">iCODE</a></h1>
            <!-- navigation -->
            <nav id="navigation">
                @if(Session::get('member') == null)
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Study Code</a></li>
                        <li><a href="#">Contacts </a></li>
                        <li><a id="modal_trigger" href="#modal">Login / Register</a></li>
                    </ul>
                @endif
                @if(Session::get('member') != null)
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Study Code</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contacts </a></li>
                        <li><a href="#">Chào {{Session::get('member')->fullname}}</a></li>
                    </ul>
                @endif
            </nav>
            <!-- navigation -->
        </div>
        <!-- end of shell -->
    </header>
    @yield('content')
</div>
<!-- footer -->
<div id="footer">
    <!-- shell -->
    <div class="shell">
        <div class="widgets">

            <div class="widget">
                <h4>CATEGORIES</h4>
                <ul>
                    <li><a href="#">Art of Photography</a></li>
                    <li><a href="#">Design Template</a></li>
                    <li><a href="#">Website &amp; Development</a></li>
                    <li><a href="#">How to Create a Great Layout</a></li>
                    <li><a href="#">Beautiful Backgrounds</a></li>
                    <li><a href="#">Customisation</a></li>
                </ul>
            </div>

            <div class="widget gallery-widget">
                <h4>GALLERY</h4>
                <ul>
                    <li><a href="#"><img src="page/css/images/gallery-img.png" alt=""/></a></li>
                    <li><a href="#"><img src="page/css/images/gallery-img2.png" alt=""/></a></li>
                    <li><a href="#"><img src="page/css/images/gallery-img3.png" alt=""/></a></li>
                    <li><a href="#"><img src="page/css/images/gallery-img4.png" alt=""/></a></li>
                    <li><a href="#"><img src="page/css/images/gallery-img5.png" alt=""/></a></li>
                    <li><a href="#"><img src="page/css/images/gallery-img6.png" alt=""/></a></li>
                </ul>
            </div>

            <div class="widget">
                <h4>Web Lab</h4>
                <ul>
                    <li><a href="#">More About Us</a></li>
                    <li><a href="#">Our Portfolio Company</a></li>
                    <li><a href="#">Company Blog</a></li>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">Get in Touch with UsMore</a></li>
                </ul>
            </div>

            <div class="widget contact-widget">
                <h4>Contacts</h4>
                <p class="address-ico">
                    Company Name Head Office<br/>
                    1234 City Name, <br/>
                    Country 7451
                </p>

                <p class="phone-ico">
                    Phone: +11 2345 6778
                    Fax: +11 2345 6789
                </p>
                <a href="#" class="chat-btn"><span class="chat-ico"></span>Client Sheet</a>
            </div>
            <div class="cl">&nbsp;</div>
        </div>
        <!-- end of widgets -->

        <!-- footer-bottom -->
        <div class="footer-bottom">
            <!-- footer-nav -->
            <div class="footer-nav">
                <ul>
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">STUDY</a></li>
                    <li><a href="#">PORTFOLIO</a></li>
                    <li><a href="#">CONTACTS</a></li>
                </ul>
            </div>
            <!-- end of footer-nav -->
            <p class="copy">&copy; company name. Design by <a href="http://chocotemplates.com" target="_blank">Chocotemplates.com</a>
            </p>
        </div>
        <!-- end of footer-bottom -->
    </div>
    <!-- end of shell -->
</div>


<div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
        <span class="header_title">Đăng nhập</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fa fa-facebook"></i></span>
                    <span class="icon_title">Đăng nhập bằng Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fa fa-google-plus"></i></span>
                    <span class="icon_title">Đăng nhập bằng Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Đăng nhập bằng khoản của bạn</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Đăng nhập</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Đăng kí</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form method="post">
                @csrf
                <label>Email / Tên tài khoản</label>
                <input id="mail" type="text"/>
                <br/>

                <label>Mật khẩu</label>
                <input id="pass" type="password"/>
                <br/>

                <div class="checkbox">
                    <input id="remember" type="checkbox"/>
                    <label for="remember">Nhớ tài khoản</label>
                </div>
            </form>
            <p id="tb" style="color:red;"></p>
            <div class="action_btns">
                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Trở
                        về</a></div>
                <div class="one_half last"><a id="btnDN" href="#" class="btn btn_red">Đăng nhập</a></div>
            </div>

            <a href="#" class="forgot_password">Quên mật khẩu?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form method="post">
                @csrf
                <label>Họ tên đầy đủ</label>
                <input id="fullname" name="fullname" type="text"/>
                <br/>

                <label>Địa chỉ Email</label>
                <input id="email" name="email" type="email"/>
                <br/>

                <label>Mật khẩu</label>
                <input id="password" name="password" type="password"/>
                <br/>

                <div class="checkbox">
                    <input id="send_updates" type="checkbox"/>
                    <label for="send_updates">Send me occasional email updates</label>
                </div>
            </form>
            <div class="action_btns">
                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Trở
                        về</a></div>
                <div class="one_half last">
                    <a type="button" id="btnRe" href="#" class="btn btn_red">Đăng kí</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- end of footer -->
<script src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript">

    // Plugin options and our code
    $("#modal_trigger").leanModal({
        top: 100,
        overlay: 0.6,
        closeButton: ".modal_close"
    });

    $(function () {
        // Calling Login Form
        $("#login_form").click(function () {
            $(".social_login").hide();
            $(".user_login").show();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function () {
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Register');
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function () {
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Login');
            return false;
        });
    });
</script>

</body>
</html>
