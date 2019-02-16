<%--
  Created by IntelliJ IDEA.
  User: ADMIN
  Date: 10/31/2018
  Time: 10:28 PM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: "SFU BaskervilleBook";
            background-color: white;
        }
        #form_dn{
            padding-top: 120px;
        }

        #title_dn {
            text-align: center;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#btnLogn').on('click', function () {
                var check = true;
                $('#thongbao').html('Please wait! Checking username and password');
                $.post("/dangnhap", {
                    username: $('#username').val(),
                    password: $('#password').val()
                }, function(data) {
                    if ($('#username').val() === '' || $('#username').val() === null) {
                        $('#e1').html('Vui lòng nhập tên tài khoản!');
                        $('#username').css('border', 'solid 1px red');
                        $('#thongbao').html('');
                       check = false;
                    }
                    if ($('#password').val() === '' || $('#password').val() === null) {
                        $('#e2').html('Vui lòng nhập mật khẩu!');
                        $('#password').css('border', 'solid 1px red');
                        $('#thongbao').html('');
                        check = false;
                    }
                    if(check){
                        if(data === 'ok'){
                            window.location.href = "/?page=1";
                        }else {
                            $('#thongbao').html('Login failed!');
                        }
                    }
                }).fail(function(xhr, textStatus, errorThrown) {
                })
            });

            $('#form_dn').on('keyup', function () {
                if ($('#username').val() !== '') {
                    $('#e1').html('');
                    $('#username').css('border', 'solid 2px green');
                }
                if ($('#password').val() !== '') {
                    $('#e2').html('');
                    $('#password').css('border', 'solid 2px green');
                }
            });
            return true;
        })
    </script>
</head>
<body>
<div class="col-sm-4"></div>
<div class="col-sm-4">

    <br>
    <div id="form_dn" class="row">
        <h1 id="title_dn">LOGIN</h1>
        <input class="form-control" type="text" id="username" placeholder="Username" name="username">
        <p style="color: red" id="e1"></p>
        <input class="form-control" type="password" name="password" placeholder="Password" id="password">
        <p style="color: red" id="e2"></p>
    </div>
    <br>
    <p style="color: red" id="thongbao"></p>
    <div align="center" class="row">
        <button id="btnLogn" type="submit" class="btn btn-success"><span
                class="glyphicon glyphicon-log-in"> Login</span>
        </button>
    </div>

</div>
<div class="col-sm-4"></div>

</body>
</html>