@extends('template/template')
@section('title')
    <title>Đăng kí thành công</title>
@endsection
@section('content')
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>đăng kí thành công</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- 404 error -->
    <div class="space-medium">
        <div class="container">
            <div class="error-wrapper">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <h1>Configuration!</h1>
                        <h3>Tài khoản của bạn đã được tạo thành công! Để đăng nhập vào website sử dụng dịch vụ khác bạn
                            vui lòng kiểm tra email để kích hoạt tài khoản.</h3>
                        <a href="/" class="btn btn-primary btn-xs">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 error -->
@endsection
