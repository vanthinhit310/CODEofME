@extends('admin/template')
@section('title')
    <title>Danh sách tài khoản quản trị</title>
@endsection
@section('content')
    <h1>Danh sách tài khoản</h1>
    <table style="text-align: center" width="100%" class="table table-striped table-bordered table-hover"
           id="dataTables-example">
        <thead>
        <tr>
            <th>Tên chủ tài khoản</th>
            <th>Email đăng kí</th>
            <th>Ngày tạo tài khoản</th>
            <th>Sửa thông tin tài khoản</th>
            <th>Xóa tài khoản</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dsuser as $ds)
            <tr>
                <td>{{$ds->name}}</td>
                <td>{{$ds->email}}</td>
                <td>{{$ds->date}}</td>
                <td><a href="/admin/action/edituser?email={{$ds->email}}"><i class="fa fa-edit"> Sửa</i></a></td>
                <td><a href="/controller/admin/action/delete-user?email={{$ds->email}}" onclick="if (confirm('Bạn muốn xóa người dùng {{$ds->name}}?'))commentDelete(1); return false"><i class="fa fa-recycle"> Xóa</i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
