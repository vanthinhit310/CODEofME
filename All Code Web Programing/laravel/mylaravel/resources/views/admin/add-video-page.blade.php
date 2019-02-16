@extends('/admin/templates')
@section('content')
    <script src="../ckeditor/ckeditor.js"></script>
    <style>
        label {
            font-weight: bold;
            font-size: 12px;
        }
    </style>

    <div id="content-wrapper">
        <div class="container">
            <h1> Thêm video mới </h1>
            <form action="/controller/admin/add-new-video" method="post" class="form-group">
                @csrf
                <label for=""> Tiêu đề video: </label>
                <input type="text" class="form-control" name="title" placeholder="Tiêu đề video"/>
                <label for=""> Link video: </label>
                <input type="text" class="form-control" name="link" placeholder="Link URL video"/>
                <label for=""> Link hình ảnh đại diện: </label>
                <input type="text" class="form-control" name="linkimage" placeholder="Link Images"/>
                <label for=""> Mô tả video: </label>
                <textarea class="form-control" id="editor1" name="des" cols="80" rows="10"> </textarea>
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
