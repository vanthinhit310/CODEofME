<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        input{
            margin: 7px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'http://127.0.0.1:8000/listProduct',
                data:{

                },
                method: 'GET',
                success: function (data) {
                    data.forEach(function (e) {
                        $('#data').append('<tr>' +
                            '<td>'+e.tensanpham+'</td>' +
                            '<td>'+'<img style="width: 10%" src="'+e.hinhanhsanpham+'" alt="">'+'</td>' +
                            '<td>'+e.gia+'</td>' +
                            '<td>'+e.soluongconlai+'</td>' +
                            '</tr>')
                    })
                }
            })
        })
    </script>

</head>
<body>
<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
            </tr>
            </thead>
            <tbody id="data">
            </tbody>
        </table>
    </div>
    <div class="row">
        <form action="http://127.0.0.1:8000/listProduct" method="post" class="form-group">
            <input type="text" class="form-control" name="ten" placeholder="Tên sản phẩm">
            <input type="text" class="form-control" name="hinhanh" placeholder="Hình ảnh sản phẩm">
            <input type="text" class="form-control" name="gia" placeholder="Giá sản phẩm">
            <input type="text" class="form-control" name="soluong" placeholder="Số lượng sản phẩm">
            <input type="submit" class="btn btn-success" value="Thêm mới">
        </form>
    </div>
</div>
</body>
</html>
