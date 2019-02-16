<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Page</title>

    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/admin">Administrator</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->


    <ul class="navbar-nav ml-auto ml-md-8">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><?php echo e(Session::get('account')->tennguoidung); ?> <i
                    class="fas fa-user-circle fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Thông tin người dùng</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/controller/admin/logout">Đăng xuất</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="/admin/login-page">Login</a>
                <a class="dropdown-item" href="/admin/register-page">Register</a>
                <a class="dropdown-item" href="/admin/forgot-password-page">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/admin/404-page">404 Page</a>
                <a class="dropdown-item" href="/admin/blank-page">Blank Page</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/charst-page">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="tableDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Tables</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="tableDropdown">
                <a class="dropdown-item" href="/admin/list-video-page">Video</a>
                <a class="dropdown-item" href="">User</a>
                <a class="dropdown-item" href="">Hình ảnh</a>
                <a class="dropdown-item" href="/admin/">Bài viết</a>
                <a class="dropdown-item" href="">Danh mục</a>
            </div>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="addDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-plus-square"></i>
                <span>Thêm mới</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="addDropdown">
                <a class="dropdown-item" href="/admin/them-bai-viet-page">Bài viết</a>
                <a class="dropdown-item" href="/admin/add-video-page">Video</a>
                <a class="dropdown-item" href="">Hình ảnh</a>
            </div>
            </a>
        </li>
    </ul>

    <?php echo $__env->yieldContent('content'); ?>
</div>


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/vendor/datatables/jquery.dataTables.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="/js/demo/datatables-demo.js"></script>
<script src="/js/demo/chart-area-demo.js"></script>

</body>

</html>
