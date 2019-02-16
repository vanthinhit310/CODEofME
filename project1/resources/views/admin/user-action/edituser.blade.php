@extends('admin/template')
@section('title')
    <title>Sửa người dùng</title>
@endsection
@section('content')
    <script>
        $(document).ready(function () {
            $('#form_add_us').on('submit', function () {
                if ($('#name').val() == '' || $('#name').val() == undefined) {
                    $('#e_name').html('Bạn phải nhập tên người dùng.');
                    $('#name').css('border', 'solid 1px red');
                    return false;
                }
                if ($('#password').val() == '' || $('#password').val() == undefined) {
                    $('#e_password').html('Bạn phải nhập mật khẩu.');
                    $('#password').css('border', 'solid 1px red');
                    return false;
                }
                if ($('#confirm').val() == '' || $('#confirm').val() == undefined) {
                    $('#e_confirm').html('Bạn phải nhập lại mật khẩu lần nữa.');
                    $('#confirm').css('border', 'solid 1px red');
                }
                if ($('#password').val() != $('#confirm').val()) {
                    $('#e_confirm').html('Mật khẩu không khớp.');
                    $('#confirm').css('border', 'solid 1px red');
                    return false;
                }
                return true;
            });
            $('#form_add_us').on('keyup', function () {
                if ($('#name').val() != '') {
                    $('#e_name').html('');
                    $('#name').css('border', 'solid 1px green');
                }
                if ($('#password').val() != '') {
                    $('#e_password').html('');
                    $('#password').css('border', 'solid 1px green');
                }
                if ($('#confirm').val() != '') {
                    $('#e_confirm').html('');
                    $('#confirm').css('border', 'solid 1px green');
                }
                return true;
            });
        })
    </script>
    <div class="container">
        <div class="row">
            <h1>Sửa người dùng - <span style="color: green">{{$user->name}}</span></h1>
        </div>
        <form id="form_add_us" method="post" action="/controller/admin/action/edit-user" role="form">
            @csrf

            <div class="form-group">
                <label for=""><i class="fa fa-edit"> Tên người dùng: </i></label>
                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                <p style="color: red" id="e_name"></p>
            </div>
            <div class="form-group">
                <label for=""><i class="fa fa-edit"> Email: </i></label>
                <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}"
                       readonly="readonly">
                <p style="color: red" id="e_email"></p>
            </div>
            <div class="form-group">
                <label for=""><i class="fa fa-edit"> Mật khẩu: </i></label>
                <input type="password" class="form-control" name="password" id="password">
                <p style="color: red" id="e_password"></p>
            </div>
            <div class="form-group">
                <label for=""><i class="fa fa-edit"> Xác nhận mật khẩu: </i></label>
                <input type="password" class="form-control" name="confirm" id="confirm">
                <p style="color: red" id="e_confirm"></p>
            </div>
            <input style="margin-left: 500px" type="submit" value="Thực hiện"
                   class="btn btn-outline btn-success"/>
        </form>
    </div>
@endsection
