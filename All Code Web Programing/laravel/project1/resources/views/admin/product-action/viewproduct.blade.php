@extends('admin/template')
@section('title')
    <title>Thông tin sản phẩm</title>
@endsection
@section('content')
    <script src="/ckeditor/ckeditor.js"></script>


    <div class="container">
        <h1 style="text-align: center; color: green">{{$product->tensanpham}}</h1>
        <form id="form_add_us" method="post" action="" role="form">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Tên sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tensp"
                               value="{{$product->tensanpham}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Công nghệ màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cnmh"
                               value="{{$product->congnghemanhinh}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgmh"
                               value="{{$product->dophangiai}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ rộng màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="drmh"
                               value="{{$product->dorongmanhinh}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera sau: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgs"
                               value="{{$product->dophangiaicamerasau}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Bộ nhớ trong: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="bnt"
                               value="{{$product->bonhotrong}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thẻ SD: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tsd"
                               value="{{$product->thesd}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Mạng di động: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="mdd"
                               value="{{$product->mangdidong}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Giá sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="gia"
                               value="{{number_format($product->gia, 0, '.', '.').' đ'}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera trước: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgt"
                               value="{{$product->dophangiaicameratruoc}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Flash: </i></label><br/>
                        @if($product->denflash =='Yes')
                            <input type="radio" class="form-group" readonly="readonly" checked="checked" name="flash"
                                   value="Yes"> Có Flash
                            <input type="radio" class="form-group" readonly="readonly" name="flash" value="No"> Không
                            Flash
                        @endif
                        @if($product->denflash !='Yes')
                            <input type="radio" class="form-group" readonly="readonly" name="flash" value="Yes"> Có
                            Flash
                            <input type="radio" checked="checked" readonly="readonly" class="form-group" name="flash"
                                   value="No"> Không Flash
                        @endif
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Quay phim: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="qp"
                               value="{{$product->quayphim}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hệ điều hành: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="hdh"
                               value="{{$product->hedieuhanh}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chuẩn WIFI: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="wf"
                               value="{{$product->wifi}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hỗ trợ jack kết nối: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="jkn"
                               value="{{$product->jack}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kết nối khác: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="knk"
                               value="{{$product->ketnoikhac}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Dung lượng PIN: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="pin"
                               value="{{$product->dungluongpin}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thiết kế sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tk"
                               value="{{$product->thietke}}">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chipset: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cs"
                               value="{{$product->chipset}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> CPU: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cpu"
                               value="{{$product->tocdocpu}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> GPU: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="gpu"
                               value="{{$product->gpu}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Ram: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ram"
                               value="{{$product->ram}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha"
                               value="{{$product->hinhanhsanpham}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 1: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha1"
                               value="{{$product->hinhanh1}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 2: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha2"
                               value="{{$product->hinhanh2}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kích thước sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="kt"
                               value="{{$product->kichthuoc}}">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thời gian ra mắt: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tg"
                               value="{{$product->thoigianramat}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <h4><strong>Số lượng sản phẩm và tính năng</strong></h4>

                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Sale off: </i></label>
                    <input type="text" class="form-control" readonly="readonly" name="sale" value="{{$product->sale.'%'}}">
                </div>
                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Số lượng nhập: </i></label>
                    <input type="text" class="form-control" readonly="readonly" name="sl"
                           value="{{$product->soluongconlai.' cái'}}">
                </div>

                <label for=""><i class="fa fa-edit"> Tính năng đặc biệt: </i></label>
                <textarea name="tn" class="form-control" readonly="readonly" id="editor"
                          rows="10">{{$product->tinhnang}}</textarea>
            </div>
            <hr/>
            <div class="row">
                <a href="/admin/listproduct" class="btn btn-outline btn-primary"><i class="fa fa-backward"></i> Danh sách sản phẩm</a>
                <a href="/admin/action/editproduct/{{$product->id}}" style="margin-left: 500px"
                   class="btn btn-outline btn-success">Sửa sản phẩm</a>
            </div>
            <br/>
        </form>
    </div>

    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
