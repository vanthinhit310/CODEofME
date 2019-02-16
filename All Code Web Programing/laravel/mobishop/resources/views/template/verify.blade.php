@extends('template/template')
@section('title')
    <title>Xác thực thành công</title>
@endsection
@section('content')
    <!-- /.page-header-->
    <!-- 404 error -->
    <div class="space-medium">
        <div class="container">
            <div class="error-wrapper">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <h3>Tài khoản của bạn đã được xác thực. Để đăng nhập vào website bạn
                            vui lòng click vào liên kết dưới đây.</h3>
                        <a href="/login-page" class="btn btn-primary btn-xs">login to site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 error -->
@endsection
