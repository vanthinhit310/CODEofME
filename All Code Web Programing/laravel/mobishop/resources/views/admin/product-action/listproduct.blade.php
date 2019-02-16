@extends('admin/template')
@section('title')
    <title>Danh sách sản phẩm</title>
@endsection
@section('content')
    <h1>Danh sách sản phẩm</h1>
    <table style="text-align: center" width="100%" class="table table-striped table-bordered table-hover"
           id="dataTables-example">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Action 1</th>
            <th>Action 2</th>
            <th>Action 3</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dsproduct as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->tensanpham}}</td>
                <td><img style="width: 35px; height: 35px" src="{{$product->hinhanhsanpham}}" alt=""/></td>
                <td>{{number_format($product->gia, 0, '.', '.').' đ'}}</td>
                <td><a href="/admin/action/viewdetailsproduct/{{$product->id}}" class="btn-link">Chi tiết</a></td>
                <td><a href="/admin/action/editproduct/{{$product->id}}"><i class="fa fa-edit"> Sửa</i></a></td>
                <td><a href="/controller/admin/action/delete-product/?id={{$product->id}}" onclick="if (confirm('Bạn muốn xóa sản phẩm {{$product->tensanpham}} khỏi danh sách sản phẩm?'))commentDelete(1); return false"><i class="fa fa-recycle"> Xóa</i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
