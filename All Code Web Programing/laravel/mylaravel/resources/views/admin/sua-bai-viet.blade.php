@extends('/admin/templates')
@section('content')
    <script src="/ckeditor/ckeditor.js"></script>
    <style>
        input[type="text"] {
            margin: 6px 0;
        }

        label {
            font-weight: bold;
            font-size: 12px;
        }
    </style>

    <div id="content-wrapper">
        <div class="container">
            <h1> Sửa bài viết </h1>
            <form action="/controller/admin/sua-bai-viet" method="post" class="form-group">
                @csrf
                <label for=""> Mã bài viết: </label>
                <input type="text" class="form-control" readonly="readonly" name="mabv" value="{{$baiviet->mabv}}"/>
                <label for=""> Tiêu đề bài viết: </label>
                <input type="text" class="form-control" name="title" value="{{$baiviet->tieudebv}}"/>
                <label for=""> Nội dung bài viết: </label>
                <textarea id="editor1" name="content" cols="80" rows="10">{{$baiviet->ndbv}}</textarea>

                <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->

                <label for=""> Tên tác giả: </label>
                <input type="text" class="form-control" value="{{$baiviet->tacgiabv}}" name="author"
                       placeholder="Tên tác giả"/>
                <label for=""> Lượt xem: </label>
                <input type="text" class="form-control" name="view" value="{{$baiviet->luotxem}}" disabled="disabled"/>
                <label for=""> URL bài viết: </label>
                <input type="text" class="form-control" name="url" value="{{$baiviet->url}}"
                       placeholder="URL bài viết"/>
                <label for=""> Link hình ảnh minh họa: </label>
                <input type="text" class="form-control" name="image" value="{{$baiviet->image}}" placeholder="Ảnh minh họa"/>
                <label for=""> Ngày đăng bài: </label>
                <input type="text" class="form-control" readonly="readonly" name="ngaydang" value="{{$baiviet->ngaydang}}"/>
                <label for=""> Loại bài viết: </label>
                <select class="form-control" name="loai-bai-viet" id="cate">
                    @foreach($dsloaibv as $lbv)
                        @if($lbv->maloaibv == $baiviet->maloaibv)
                            <option selected value="{{$lbv->maloaibv}}">{{$lbv->tenlbv}}</option>
                        @endif
                        @if($lbv->maloaibv != $baiviet->maloaibv)
                            <option value="{{$lbv->maloaibv}}">{{$lbv->tenlbv}}</option>
                        @endif

                    @endforeach
                </select>
                <br/>
                <input type="submit" id="btnadd" class="btn btn-success" value="Thực hiện"/>
            </form>
        </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <script>

        CKEDITOR.replace('editor1');

    </script>
@endsection
