<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%--
  Created by IntelliJ IDEA.
  User: ADMIN
  Date: 11/16/2018
  Time: 4:16 PM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title></title>
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
<body>

<header id="header">
    <!--header-->
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <%if (session.getAttribute("user")!= null){%>
                            <li><a href=""><i class="fa fa-user"></i>Xin chào ${account.name}</a></li>
                            <li><a href="/cart_page"><i class="fa fa-shopping-cart"></i> Giỏ hàng <span class="badge badge-light">${cart.size()}</span></a></li>
                            <li><a href="/changepassword_page"><i class="fa fa-lock"></i> Đổi mật khẩu</a></li>
                            <li><a href="Account/dangxuat"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                            <%}else{%>
                            <li><a href="/login_page"><i class="fa fa-lock"></i> Đăng nhập/Đăng kí</a></li>
                            <li><a href="/forgotpassword_page"><i class="fa fa-lock"></i> Quên mật khẩu</a></li>
                            <li><a href="/cart_page"><i class="fa fa-shopping-cart"></i> Giỏ hàng <span class="badge badge-light">${cart.size()}</span></a></li>
                            <%}%>
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
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/">Sản phẩm</a></li>
                                    <li><a href="/cart_page">Giỏ hàng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/Tìm kiếm sản phẩm-->
                <div class="col-sm-3">
                    <form id="search_box_form" action="/search_page">
                        <div class="search_box pull-right">
                            <input id="search_box" type="text" name="key" placeholder="Tìm kiếm" />
                        </div>
                    </form>
                </div>
                <!--/Tìm kiếm sản phẩm-->
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->

</body>
</html>
