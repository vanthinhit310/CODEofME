@extends('template/template')
@section('title')
    <title>Đổi mật khẩu</title>
@endsection
@section('content')
    <script>
        $(document).ready(function () {
            $('#btn').on('click', function () {
                var check = true;
                if ($('#oldpass').val() === '' || $('#oldpass').val() === undefined) {
                    $('#err').html('Trường này không được trống');
                    $('#oldpass').css('border', 'solid 1px red');
                    check = false;
                }
                if (check) {
                    $.ajax({
                        url: '/controller/template/action/forgotpass',
                        data: {
                            email: $('#oldpass').val(),
                            '_token': '{{csrf_token()}}'
                        },
                        method: "GET",
                        success: function (data) {
                            console.log(data);
                            if (data.data === 'ok') {
                                $('#modal').click();
                            }
                            else if (data.data === 'faild') {
                                alert('Email mà bạn cung cấp không chính xác. Vui lòng kiểm tra lại')
                                $('#oldpass').css('border', 'solid 1px red');
                            }
                        }
                    });
                }
            });
            $('#form-c').on('keyup', function () {
                if ($('#oldpass').val() !== '') {
                    $('#err').html('');
                    $('#oldpass').css('border', 'solid 2px green');
                }
                return true;
            });
        })
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
                                    @csrf
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input id="oldpass" name="email" type="text" class="form-control"
                                                       placeholder="Email đăng kí tài khoản" required>
                                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                                <p id="err" style="color: red"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p id="err" style="color: red"></p>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                    <button id="btn" class="btn btn-primary btn-block mb10">Continue</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Chúng tôi đã gửi một email xác nhận cho bạn. Hãy kiểm tra email của bạn để tiến hành đặt lại mật
                        khẩu!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
