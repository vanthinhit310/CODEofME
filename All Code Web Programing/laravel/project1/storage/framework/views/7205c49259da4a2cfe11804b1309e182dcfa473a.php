<?php $__env->startSection('title'); ?>
    <title>Đổi mật khẩu</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>
        $(document).ready(function () {
            $('#btn').on('click', function () {
                var ok = true;
                if ($('#oldpass').val() === '' || $('#oldpass').val() === undefined) {
                    $('#tb').html('Trường này không được trống');
                    $('#oldpass').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#confirm').val() === '' || $('#confirm').val() === undefined) {
                    $('#tb').html('Trường này không được trống');
                    $('#confirm').css('border', 'solid 1px red');
                    ok = false;
                }
                if ($('#oldpass').val() !== $('#confirm').val()) {
                    $('#tb').html('Mật khẩu không khớp');
                    $('#oldpass').css('border', 'solid 1px red');
                    $('#confirm').css('border', 'solid 1px red');
                    ok = false;
                }
                if (ok) {
                    $.ajax({
                        url: '/controller/template/action/resetpassword',
                        data: {
                            email: '<?php echo e($email); ?>',
                            newpass: $('#oldpass').val(),
                            '_token': '<?php echo e(csrf_token()); ?>'
                        },
                        method: 'POST',
                        success: function (data) {
                            console.log(data);
                            if (data.data === 'ok') {
                                $('#modal').click();
                            }
                            else if (data.data === 'faild') {
                                $('#tb').html('Faild');
                            }
                        }
                    });
                }

            });

            $('#form-c').on('keyup', function () {
                if ($('#oldpass').val() !== '') {
                    $('#tb').html('');
                    $('#oldpass').css('border', 'solid 2px green');
                }
                if ($('#confirm').val() !== '') {
                    $('#tb').html('');
                    $('#confirm').css('border', 'solid 2px green');
                }
                return true;
            });
        });
    </script>

    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div style="margin-left: 350px"
                         class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Quên mật khẩu</h3>
                                </div>
                                <!-- form -->
                                <form id="form-c" method="post" action="">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input id="oldpass" name="newpass" type="password" class="form-control"
                                                       placeholder="Mật khẩu mới" required>
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                                <input id="confirm" name="confirm" type="password" class="form-control"
                                                       placeholder="Xác nhận mật khẩu mới" required>
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                    <button id="btn" class="btn btn-primary btn-block mb10">Continue</button>
                                    <p id="tb" style="color: red; text-align: center"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button style="display: none" id="modal" type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Successfully!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Mật khẩu của bạn đã được cập nhật lại - Bạn vui lòng đăng nhập để tiếp tục trải nghiệm dịch
                        vụ.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.location.href='/login-page'; " class="btn btn-secondary"
                            data-dismiss="modal">Đăng nhập ngay
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>