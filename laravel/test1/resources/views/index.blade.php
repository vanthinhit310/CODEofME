<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
          integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        input {
            margin: 7px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>LINK IMAGE</th>
                <th>NAME IMAGE</th>
            </tr>
            </thead>
            <tbody id="data">

            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-sm-4"></div>
        <div align="center" class="col-sm-4">
            <form class="form-group" enctype="multipart/form-data" action="http://127.0.0.1:8000/image">
                @csrf
                <input id="file" class="form-control" type="file" name="_image"/>
            </form>
            <p style="color: green" id="tb"></p>
            <p style="color: red" id="er"></p>
            <input type="submit" id="btn" class="btn btn-success" value="Thêm file">
        </div>
        <div class="col-sm-4"></div>

    </div>
</div>
</body>
</html>
