<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Đặt hàng thành công</title>
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
	<jsp:include page="menu.jsp"></jsp:include>

	<div style="font-family: serif;" class="container">
		<h1 align="center">Thông tin đơn hàng</h1>
		<h5>Đơn hàng được cập nhật lúc <i style="color: blue">${DonHang.orderTime}</i></h5>
		<br>
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Thuộc tính</th>
						<th>Giá trị</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong style="color:royalblue;">Mã đơn hàng</strong></td>
						<td>${DonHang.orderId}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Tên khách hàng</strong></td>
						<td>${DonHang.orderName}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Địa chỉ</strong></td>
						<td>${DonHang.orderAdd}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Số điện thoại</strong></td>
						<td>${DonHang.orderPhone}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Email</strong></td>
						<td>${DonHang.orderMail}</td>
					</tr>
					<div class="clearfix"></div>

					<tr>
						<td><strong style="color:royalblue;">Thời gian đặt hàng</strong></td>
						<td>${DonHang.orderTime}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Giá trị đơn hàng</strong></td>
						<td><fmt:formatNumber type="number" pattern="###,###" value="${DonHang.orderPrice}"/> đ</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Các sản phẩm đã mua</strong></td>
						<td>${DonHang.orderNameProduct}</td>
					</tr>
					<div class="clearfix"></div>
					<tr>
						<td><strong style="color:royalblue;">Số sản phẩm của đơn hàng</strong></td>
						<td>${DonHang.orderCountProduct} sản phẩm</td>
					</tr>
					<div class="clearfix"></div>
				</tbody>
			</table>
		</div>
		<div>

		</div>
		<div class="col-sm-2"></div>
	</div>
	<div align="center">
		<a href="/payment/huydonhang?madh=${DonHang.orderId}" class="btn btn-danger">Hủy đơn hàng</a>
	</div>
	<br>
	<br>

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
</body>

</html>