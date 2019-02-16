<%--
  Created by IntelliJ IDEA.
  User: ADMIN
  Date: 11/4/2018
  Time: 3:45 PM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
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
</head>
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
                        <a href="/"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <%if(session.getAttribute("thanhvien")!= null){%>
                            <li><a href=""><i class="fa fa-user"></i> ${motthanhvien.name}</a></li>
                            <li><a href="/changeyourpassword"><i class="fa fa-lock"></i> Đổi mật khẩu</a></li>
                            <li><a href="Thanhvien/dangxuat"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <%}else{%>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li><a href="/login"><i class="fa fa-lock"></i> Đăng nhập/Đăng kí</a></li>
                            <li><a href="/forgotpassword"><i class="fa fa-lock"></i> Quên mật khẩu</a></li>
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
                                    <li><a href="/cart">Giỏ hàng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/Tìm kiếm sản phẩm-->
                <div class="col-sm-3">
                    <form id="search_box_form" method="post" action="Thanhvien/timkiem">
                        <div class="search_box pull-right">
                            <input id="search_box" type="text" name="search_box" placeholder="Tìm kiếm" />
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
<!--------------------------------------------------------------------------------------------------------->



<!--------------------------------------------------------------------------------------------------------->
<!-- Content-->
<!--------------------------------------------------------------------------------------------------------->

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div style="font-family: serif;;" class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form id="formtt" action="ThanhToanController" class="checkout" method="post" name="checkout">
                            <input name="action" value="thanhtoan" style="display: none">
                            <div id="customer_details" class="col2-set">

                                <div style="padding-left: 130px" class="col-sm-6">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Thông tin đơn hàng</h3>
                                        <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                            <label class="" for="billing_country">Quốc gia <abbr title="required" class="required">*</abbr>
                                            </label> <select class="country_to_state country_select" id="billing_country" name="quocgia">
                                            <option selected="selected" value="">Chọn quốc gia…</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="PW">Belau</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Saint Eustatius and
                                                Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">CuraÇao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald
                                                Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="CI">Ivory Coast</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao S.A.R., China</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="IE">Republic of Ireland</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="SX">Saint Martin (Dutch part)</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom (UK)</option>
                                            <option value="US">United States (US)</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                        </p>

                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                            <%--@declare id="billing_last_name"--%><label class="" for="billing_last_name">Họ tên khách hàng <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Họ tên khách hàng" id="name" name="hotenkh" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err1"></p>


                                        <div class="clear"></div>

                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <%--@declare id="billing_address_1"--%><label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Số nhà - tên đường - Phường - Xã" id="add" name="diachi"
                                                            class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err2"></p>



                                        <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                            <%--@declare id="billing_city"--%><label class="" for="billing_city">Quận / Huyện <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Quận / Huyện" id="qh" name="quanhuyen" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err3"></p>



                                        <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                            <%--@declare id="billing_state"--%><label class="" for="billing_state">Tỉnh / Thành phố </label> <input type="text" id="tp" name="tinhthanhpho"
                                                                                                                                                    placeholder="Tỉnh / Thành phố" value="" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err4"></p>


                                        <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode"
                                           data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                            <%--@declare id="billing_postcode"--%><label class="" for="billing_postcode">Mã bưu điện <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Mã bưu điện. Ex(+84)" id="mbd" name="mabuudien" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err5"></p>



                                        <div class="clear"></div>

                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                            <%--@declare id="billing_email"--%><label class="" for="billing_email">Địa chỉ Email <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Email của bạn" id="email" name="email" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err6"></p>



                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <%--@declare id="billing_phone"--%><label class="" for="billing_phone">Số điện thoại <abbr title="required" class="required">*</abbr>
                                            </label> <input type="text" value="" placeholder="Số điện thoại liên lạc" id="phone" name="sdt" class="input-text ">
                                        <p style="font-family: monospace; color: red;font-size: 15px" id="err7"></p>


                                        <div class="clear"></div>

                                    </div>
                                </div>

                                <!---------------------------------------------------------------------------------------------------------------------- -->
                                <div class="col-sm-1"></div>


                                <div style="padding-top: 0px" align="center" class="col-sm-5">
                                    <h3 id="order_review_heading">Đơn hàng</h3>
                                    <br>
                                    <div id="order_review" style="position: relative;">
                                        <table class="shop_table">

                                            <thead>

                                            <tr>
                                                <th style="color: blue" class="product-name"><b>Sản phẩm</b></th>
                                                <th class="product-total"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="cart_item">
                                                <td style="color: blue" class="product-name"><b>Số lượng & giá</b> <strong class="product-quantity"></strong>
                                                </td>
                                                <td class="product-total"><span class="amount"></span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td style="color: blue" class="product-name"><b>Hình ảnh sản phẩm</b> <strong class="product-quantity"></strong>
                                                </td>
                                                <td class="product-total"><span class="amount"><img width="30" height="30" alt="" class="shop_thumbnail"
                                                                                                    src=""></span>
                                                </td>
                                            </tr>

                                            </tbody>

                                            <tfoot>

                                            <tr class="cart-subtotal">
                                                <th style="color: blue"><b>Thành tiền</b></th>
                                                <td><span class="amount"></span></td>
                                            </tr>
                                            </tfoot>

                                        </table>
                                        <div id="payment">
                                            <div class="form-row place-order">
                                                <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="woocommerce_checkout_place_order"
                                                       class="button alt">
                                            </div>

                                            <div class="clear"></div>

                                        </div>
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


<!--------------------------------------------------------------------------------------------------------->
<!-- Menu -->
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
                            <input style="width: 150px" type="text" placeholder="Your email address" />
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
