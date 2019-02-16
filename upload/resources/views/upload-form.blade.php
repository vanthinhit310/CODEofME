<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo Upload File - Toidicode.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#image').on('change', function () {
                var image = $('#image');
                var fileImage = image[0].files[0];
                if (fileImage.type !== 'image/jpeg') {
                    $('#tb').html('File không đúng định dạng');
                    return false;
                }
                if (fileImage.size > 6500000) {
                    $('#tb').html('Kích thước hình ảnh quá lớn');
                    return false;
                }
                if (fileImage.type === 'image/jpeg') {
                    $('#tb').html('');
                    return true;
                }
                if (fileImage.size <= 6500000) {
                    $('#tb').html('');
                    return true;
                }
                return true;
            });

            $('#btn').on('click', function () {
                $.ajax({
                    url: '/listfile',
                    data: {},
                    method: 'GET',
                    success: function (data) {
                        $('#data').append(data);
                    }
                })
            })
        })
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Upload file</h1>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div style="text-align: center" class="col-sm-4">
            <form class="form-group" action="/file" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <input id="image" size="10" class="form-control" type="file" name="image" required="true">
                <p style="color: red" id="tb"></p>
                <input id="sub" class="btn btn-outline-success" type="submit" value="upload">
            </form>

            <form class="form-group" action="/filemulti" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <input class="form-control" type="file" name="attachment[]" multiple>
                <input class="btn btn-outline-success" type="submit" value="upload">
            </form>
            <button type="button" id="btn" class="btn btn-outline-info">Xem danh sách file</button>
            <p id="data"></p> <br/>
            <br/>

            <input class="form-control" type="text" name="keydele" placeholder="Tên file cần xóa"/>
            <a href="/destroy" class="btn btn-link">Xóa file</a>
            <button id="info" class="btn btn-outline-info" type="button" value="">Xem thông tin</button>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>
</body>
</html>
