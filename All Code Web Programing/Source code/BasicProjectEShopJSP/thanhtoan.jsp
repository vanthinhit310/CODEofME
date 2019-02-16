<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Thanh toán | E Shop</title>
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

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#formtt').on('submit', function () {
				if ($('#name').val() === '') {
					$('#err1').html('Phải nhập họ tên.');
					$('#name').css('border', 'solid 1px red');
					return false;
				}
				if ($('#add').val() === '') {
					$('#err2').html('Phải nhập địa chỉ.');
					$('#add').css('border', 'solid 1px red');
					return false;
				}
				if ($('#qh').val() === '') {
					$('#err3').html('Phải nhập quận huyện.');
					$('#qh').css('border', 'solid 1px red');
					return false;
				}
				if ($('#tp').val() === '') {
					$('#err4').html('Phải nhập tỉnh hoặc thành phố.');
					$('#tp').css('border', 'solid 1px red');
					return false;
				}
				if ($('#mbd').val() === '') {
					$('#err5').html('Phải nhập mã bưu điện.');
					$('#mbd').css('border', 'solid 1px red');
					return false;
				}
				if ($('#email').val() === '') {
					$('#err6').html('Phải nhập email.');
					$('#email').css('border', 'solid 1px red');
					return false;
				}
				if ($('#phone').val() === '') {
					$('#err7').html('Phải nhập số điện thoại.');
					$('#phone').css('border', 'solid 1px red');
					return false;
				}
				return true;
			});
			$('#formtt').on('keyup', function () {
				if ($('#name').val() !== '') {
					$('#err1').html('');
					$('#name').css('border', 'solid 2px green');
				}
				if ($('#add').val() !== '') {
					$('#err2').html('');
					$('#add').css('border', 'solid 2px green');
				}
				if ($('#qh').val() !== '') {
					$('#err3').html('');
					$('#qh').css('border', 'solid 2px green');
				}
				if ($('#tp').val() !== '') {
					$('#err4').html('');
					$('#tp').css('border', 'solid 2px green');
				}
				if ($('#mbd').val() !== '') {
					$('#err5').html('');
					$('#mbd').css('border', 'solid 2px green');
				}
				if ($('#email').val() !== '') {
					$('#err6').html('');
					$('#email').css('border', 'solid 2px green');
				}
				if ($('#phone').val() !== '') {
					$('#err7').html('');
					$('#phone').css('border', 'solid 2px green');
				}


			});

		});

	</script>
</head>

<body>

	<!--------------------------------------------------------------------------------------------------------->
	<!-- Menu -->
	<header id="header">
		<!--header-->
		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập/Đăng kí</a></li>
								<li><a href="forgotpassword.html"><i class="fa fa-lock"></i> Quên mật khẩu</a></li>
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
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="index.html">Sản phẩm</a></li>
										<li><a href="chitietsanpham.html">Chi tiết sản phẩm</a></li>
										<li><a href="cart.html">Giỏ hàng</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!--/Tìm kiếm sản phẩm-->
					<div class="col-sm-3">
						<form id="search_box_form" method="post" action="#">
							<div class="search_box pull-right">
								<input id="search_box" type="text" name="search_box" placeholder="Tìm kiếm" />
							</div>
						</form>
					</div>
					<!--/Tìm kiếm sản phẩm-->
				</div>
			</div>
		</div>
	</header>
	
	<div class="single-product-area">
		<div class="container">
			<div class="row">
				<div style="font-family: serif" class="col-md-12">
					<div class="product-content-right">
						<div class="woocommerce">
							<form id="formtt" action="ThanhToanController" class="checkout" method="post" name="checkout">
								<input name="action" value="thanhtoan" style="display: none"/>
								<div id="customer_details" class="col2-set">

									<div style="padding-left: 130px" class="col-sm-6">
										<div class="woocommerce-billing-fields">
											<h3>Thông tin đơn hàng</h3>
											<select class="country_to_state country_select" id="billing_country" name="quocgia">
												<option selected="selected" value="">Chọn quốc gia…</option>
												<option value="AX">Åland Islands</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
											</select>

											<input type="text" value="" placeholder="Họ tên khách hàng" id="name" name="hotenkh" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err1"></p>


											<input type="text" value="" placeholder="Số nhà - tên đường - Phường - Xã" id="add" name="diachi" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err2"></p>


											<input type="text" value="" placeholder="Quận / Huyện" id="qh" name="quanhuyen" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err3"></p>


											<input type="text" id="tp" name="tinhthanhpho" placeholder="Tỉnh / Thành phố" value="" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err4"></p>


											<input type="text" value="" placeholder="Mã bưu điện. Ex(+84)" id="mbd" name="mabuudien" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err5"></p>


											<input type="text" value="" placeholder="Email của bạn" id="email" name="email" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err6"></p>

											<input type="text" value="" placeholder="Số điện thoại liên lạc" id="phone" name="sdt" class="input-text " />
											<p style="font-family: monospace; color: red;font-size: 15px" id="err7"></p>

										</div>
									</div>


									<div class="col-sm-1"></div>


									<div class="col-sm-5">
										<i id="order_review_heading"> Review</i>
										<table class="shop_table">

											<tbody>
												<tr class="cart_item">
													<td style="color: blue"><b>Danh sách mã sản phẩm</b> <strong class="product-quantity"></strong>
													</td>
													<td>9</td>
												</tr>

												<tr class="cart_item">
													<td style="color: blue"><b>Tổng số lượng sản phẩm trong giỏ</b> <strong class="product-quantity"></strong>
													</td>
													<td>9</td>
												</tr>

												<tr class="cart_item">
													<td style="color: blue"><b>Tổng số tiền phải thanh toán</b> <strong class="product-quantity"></strong>
													</td>
													<td>9</td>
												</tr>
											</tbody>

										</table>
										<div id="payment" style="text-align: center">
											<input type="submit" value="Đặt hàng" id="place_order" />
										</div>
									</div>


								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
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
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->

	<!--------------------------------------------------------------------------------------------------------->


	<!-- Latest jQuery form server -->
	<script src="https://code.jquery.com/jquery.min.js"></script>

	<!-- Bootstrap JS form CDN -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- jQuery sticky menu -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>

	<!-- jQuery easing -->
	<script src="js/jquery.easing.1.3.min.js"></script>

	<!-- Main Script -->
	<script src="js/main.js"></script>
</body>

</html>