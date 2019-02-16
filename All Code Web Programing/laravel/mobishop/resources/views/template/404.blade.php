@extends('template/template')
@section('title')
    <title>404 - Not found</title>
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
                            <li>404 error</li>
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
                        <h2>We Coudn’t Find The Page</h2>
                        <p>The page you are looking for couldn't be found. It looks like you may have taken a wrong turn
                            or we might have switched direction. You can search your directionin below searchbar.</p>
                        <a href="/" class="btn btn-primary btn-lg">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 error -->
@endsection
