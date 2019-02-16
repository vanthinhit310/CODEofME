<?php $__env->startSection('title'); ?>
    <title>Đăng kí</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>
        $(document).ready(function () {
            $('#btn').on('click', function () {
                $('#tb').html('Đang tiến hành đăng kí...');
                var ok = true;
                if ($('#name').val() === '' || $('#name').val() === undefined) {
                    $('#tb').html('Bạn phải nhập đầy đủ thông tin');
                    $('#name').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#phone').val() === '' || $('#phone').val() === undefined) {
                    $('#tb').html('Bạn phải nhập đầy đủ thông tin');
                    $('#phone').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#email').val() === '' || $('#email').val() === undefined) {
                    $('#tb').html('Bạn phải nhập đầy đủ thông tin');
                    $('#email').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#password').val() === '' || $('#password').val() === undefined) {
                    $('#tb').html('Bạn phải nhập đầy đủ thông tin');
                    $('#password').css('border', 'solid 1px red');
                    ok = false;
                }
                if (ok) {
                    $.ajax({
                        url: '/controller/template/action/register',
                        data: {
                            name: $('#name').val(),
                            phone: $('#phone').val(),
                            email: $('#email').val(),
                            password: $('#password').val(),
                            '_token': '<?php echo e(csrf_token()); ?>'
                        },
                        method: 'POST',
                        success: function (data) {
                            console.log(data);
                            if (data.data === 'success') {
                                $('#tb').html('Đăng kí thành công');
                                window.location.href = '/success-page';
                            }
                        }
                    });
                }

            });
            $('#form-dk').on('keyup', function () {
                if ($('#name').val() === '') {
                    $('#tb').html('');
                    $('#name').css('border', 'solid 2px green');
                }
                if ($('#phone').val() === '') {
                    $('#tb').html('');
                    $('#phone').css('border', 'solid 2px green');
                }
                if ($('#email').val() === '') {
                    $('#tb').html('');
                    $('#email').css('border', 'solid 2px green');
                }
                if ($('#password').val() === '') {
                    $('#tb').html('');
                    $('#password').css('border', 'solid 2px green');
                }
                return true;
            });
        });
    </script>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>signup form</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- sign-up form -->
    <div class="content">
        <div class="container">
            <div class="box sing-form">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <!-- form -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Create Your Account</h3>
                                    <p>Please fill all Resgister form Fields Below. </p>
                                </div>
                                <form id="form-dk" method="post" action="">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name">

                                            </label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                   placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="phone"></label>
                                            <input id="phone" name="phone" type="text" class="form-control"
                                                   placeholder=" Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                   placeholder="Enter your email id" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label  sr-only" for="password"></label>
                                            <input id="password" name="password" type="password" class="form-control"
                                                   placeholder="create your password" required>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <button id="btn" class="btn btn-primary btn-block mb10">Register</button>
                                    <div>
                                        <p>Have an Acount? <a href="/login-page">Login</a></p>
                                    </div>
                                </div>
                                <p id="tb" style="text-align: center; color: red; font-size: 14px"></p>
                            </div>
                            <!-- /.form -->
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