<?php $__env->startSection('title'); ?>
    <title>Liên hệ</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>
        function checkEmail() {
            var email = document.getElementById('email');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!filter.test(email.value)) {
                return false;
            }
        }

        $(document).ready(function () {
            $('#btn').on('click', function () {
                $('#tb1').html('Đang gửi phản hồi của bạn...');
                var check = true;
                if ($('#name').val() === '' || $('#name').val() === undefined) {
                    $('#name').css('border', 'solid 1px red');
                    $('#tb').html('Bạn phải nhập đủ thông tin');
                    $('#tb1').html('');
                    check = false;
                }
                if ($('#phone').val() === '' || $('#phone').val() === undefined) {
                    $('#phone').css('border', 'solid 1px red');
                    $('#tb').html('Bạn phải nhập đủ thông tin');
                    $('#tb1').html('');
                    check = false;
                }
                if ($('#email').val() === '' || $('#email').val() === undefined) {
                    $('#email').css('border', 'solid 1px red');
                    $('#tb').html('Bạn phải nhập đủ thông tin');
                    $('#tb1').html('');
                    check = false;
                }
                if (checkEmail() == false) {
                    $('#email').css('border', 'solid 1px red');
                    $('#tb').html('Email không hợp lệ');
                    $('#tb1').html('');
                    check = false;
                }
                if ($('#title').val() === '' || $('#title').val() === undefined) {
                    $('#title').css('border', 'solid 1px red');
                    $('#tb').html('Bạn phải nhập đủ thông tin');
                    $('#tb1').html('');
                    check = false;
                }
                if ($('#mes').val() === '' || $('#mes').val() === undefined) {
                    $('#mes').css('border', 'solid 1px red');
                    $('#tb').html('Bạn phải nhập đủ thông tin');
                    $('#tb1').html('');
                    check = false;
                }
                if (check) {
                    $.ajax({
                        url: '/controller/contact/action/sentCT',
                        data: {
                            name: $('#name').val(),
                            phone: $('#phone').val(),
                            email: $('#email').val(),
                            title: $('#title').val(),
                            mes: $('#mes').val(),
                            '_token':'<?php echo e(csrf_token()); ?>'
                        },
                        method: 'POST',
                        success: function (data) {
                            if (data.data === 'ok') {
                                alert('Cảm ơn bạn đã góp ý kiến!');
                                $('#tb1').html('');
                                $('#name').val('');
                                $('#phone').val('');
                                $('#email').val('');
                                $('#title').val('');
                                $('#mes').val('');
                            }
                        }
                    })
                }
            });
            $('#form-ct').on('keyup', function () {
                if ($('#name').val() !== '') {
                    $('#name').css('border', 'solid 2px green');
                    $('#tb').html('');
                    $('#tb1').html('');
                }
                if ($('#phone').val() !== '') {
                    $('#phone').css('border', 'solid 2px green');
                    $('#tb').html('');
                    $('#tb1').html('');
                }
                if ($('#email').val() !== '') {
                    $('#email').css('border', 'solid 2px green');
                    $('#tb').html('');
                    $('#tb1').html('');
                }
                if ($('#title').val() !== '') {
                    $('#title').css('border', 'solid 2px green');
                    $('#tb').html('');
                    $('#tb1').html('');
                }
                if ($('#mes').val() !== '') {
                    $('#mes').css('border', 'solid 2px green');
                    $('#tb').html('');
                    $('#tb1').html('');
                }
                return true;
            })
        });
    </script>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- contact-form -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h2 class="head-title">Contact Us</h2>
                        </div>
                        <div class="box-body contact-form">
                            <div class="row">
                                <form id="form-ct" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name"></label>
                                            <input id="name" type="text" name="name" placeholder="Tên của bạn"
                                                   class="form-control"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input id="phone" type="text" name="phone"
                                                   placeholder="Số điện thoại của bạn"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <input id="email" type="text" name="email"
                                                   placeholder="Địa chỉ Email để chúng tôi phản hồi"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="name"></label>
                                            <input id="title" type="text" name="title" placeholder="Tiêu đề"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="textarea"></label>
                                            <textarea class="form-control" id="mes" name="mes" rows="4"
                                                      placeholder="Nội dung"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p id="tb1" style="color: green; font-size: 15px"></p>
                            <p id="tb" style="color: red; font-size: 14px"></p>
                            <button id="btn" type="button" name="singlebutton" class="btn btn-primary">Gửi phản hồi
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.contact-form -->
                <!-- address-block -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h2 class="head-title">Contact Info</h2>
                        </div>
                        <div class="box-body">
                            <div class="contact-block">
                                <h4>Corporate Headquater</h4>
                                <p>3718 Pretty View Lane Santa Rosa, CA 95401</p>
                            </div>
                            <div class="contact-block">
                                <h4>Sales Info &amp; Inquiries</h4>
                                <p class="mb0">Toll Free: <span class="text-default">180-456-8910</span></p>
                                <p class="mb0">Email: <span class="text-default">help@mobistore.com</span></p>
                            </div>
                            <div class="contact-block">
                                <h4>General Contact</h4>
                                <p class="mb0">Phone: <span class="text-default">180-123-4567</span></p>
                                <p class="mb0">Email: <span class="text-default">demo@mobistore.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.address-block -->
            </div>
            <!-- support-block -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">How Can We Help You?</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="suport-block">
                                        <div class="support-icon">
                                            <img src="./images/inquiry_icon.png" alt="">
                                        </div>
                                        <div class="support-content">
                                            <h4>Sales Inquiry</h4>
                                            <p>Suspendisse sodales venenatis velitut fringilla lorem on vulputateam
                                                augue nislpretium qutristique sodales serotut fringilla.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="suport-block">
                                        <div class="support-icon">
                                            <img src="./images/support_icon.png" alt="">
                                        </div>
                                        <div class="support-content">
                                            <h4>Customer Support</h4>
                                            <p>Pendisse sodales venenatis velitut fringilla lorem on vulputateam augue
                                                nislpretium qutristique sodales seron magna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.support-block -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>