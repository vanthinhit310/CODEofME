<?php $__env->startSection('title'); ?>
    <title>Đăng nhập</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>
        function onSignIn(googleUser) {
            // Useful data for your client-side scripts:
            var profile = googleUser.getBasicProfile();
            console.log("ID: " + profile.getId()); // Don't send this directly to your server!
            console.log('Full Name: ' + profile.getName());
            console.log('Given Name: ' + profile.getGivenName());
            console.log('Family Name: ' + profile.getFamilyName());
            console.log("Image URL: " + profile.getImageUrl());
            console.log("Email: " + profile.getEmail());

            // The ID token you need to pass to your backend:
            var id_token = googleUser.getAuthResponse().id_token;
            console.log("ID Token: " + id_token);
            $.ajax({
                url: '/controller/google/action/regAccount',
                data: {
                    id: profile.getId(),
                    name: profile.getName(),
                    email: profile.getEmail(),
                    avatar: profile.getImageUrl()
                },
                method: 'GET',
                success: function (data) {
                    if (data.data === 'ok') {
                        window.location.href = '/';
                    }
                    if (data.data === 'faild') {
                        window.location.href = '/';
                    }
                }
            })
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#btn').on('click', function () {
                $('#tb').html('Đang đăng nhập...');
                var ok = true;
                if ($('#email').val() === '' || $('#email').val() === undefined) {
                    $('#tb').html('Bạn phải nhập username và password');
                    $('#email').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#password').val() === '' || $('#password').val() === undefined) {
                    $('#tb').html('Bạn phải nhập username và password');
                    $('#password').css('border', 'solid 1px red');
                    ok = false;
                }
                if (ok) {
                    $.ajax({
                        url: '/controller/template/action/login',
                        data: {
                            email: $('#email').val(),
                            password: $('#password').val(),
                            '_token': '<?php echo e(csrf_token()); ?>'
                        },
                        method: 'POST',
                        success: function (data) {
                            if (data.data === 'ok') {
                                window.location.href = '/';
                            } else if (data.data === 'faild') {
                                $('#tb').html('Email hoặc mật khẩu không chính xác. Vui lòng kiểm tra.')
                            }
                        }
                    })
                }
            });
            $('#form-dn').on('keyup', function () {
                if ($('#email').val() !== '') {
                    $('#tb').html('');
                    $('#email').css('border', 'solid 2px green');
                }
                if ($('#password').val() !== '') {
                    $('#tb').html('');
                    $('#password').css('border', 'solid 2px green');
                }
                return true;
            })
        })
    </script>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Login</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- login-form -->

    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Đăng nhập</h3>
                                </div>
                                <!-- form -->
                                <form method="post" action="/controller/template/action/login" id="form-dn">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="login-input">
                                                <input id="email" name="email" type="text" class="form-control"
                                                       placeholder="Enter your email id">
                                                <div class="login-icon"><i class="fa fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input id="password" name="password" type="password"
                                                       class="form-control"
                                                       placeholder="******">
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                                <div class="eye-icon"><i class="fa fa-eye"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                    <button id="btn" class="btn btn-primary btn-block mb10">Login</button>
                                    <div>
                                        <p>Do you have an Acount? <a href="/register-page">Register</a></p>
                                    </div>
                                </div>
                                <p id="tb" style="color: red; text-align: center"></p>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                                    <h4 class="mb20">Đăng nhập với</h4>
                                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                </div>
                                <!-- /.form -->
                            </div>
                        </div>
                    </div>
                    <!-- features -->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="/view-page/images/feature_icon_1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Loyalty Points</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit
                                        manert.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="/view-page/images/feature_icon_2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Instant Checkout</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit
                                        manert.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="/view-page/images/feature_icon_3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Exculsive Offers</h4>
                                    <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit
                                        manert.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>