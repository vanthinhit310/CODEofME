<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php echo $__env->yieldContent('title'); ?>

<!-- Bootstrap Core CSS -->
    <link href="/admin-page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/admin-page/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="/admin-page/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="/admin-page/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin-page/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Social Buttons CSS -->
    <link href="/admin-page/vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/admin-page/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/admin-page/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="/admin-page/js/jquery.js"></script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/">Administrator</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin người dùng</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href=""><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/admin/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/morris-page">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="/admin/forms-page"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/panels-page">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="/admin/buttons-page">Buttons</a>
                            </li>
                            <li>
                                <a href="/admin/notifications-page">Notifications</a>
                            </li>
                            <li>
                                <a href="/admin/typographys-page">Typography</a>
                            </li>
                            <li>
                                <a href="/admin/icons-page"> Icons</a>
                            </li>
                            <li>
                                <a href="/admin/gird-page">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-flag"> User</i> <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="/admin/action/adduser"><i class="fa fa-user"> Thêm User</i></a>
                                    </li>
                                    <li>
                                        <a href="/admin/listuser"><i class="fa fa-list"> Danh sách User</i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-lock"> Đổi mật khẩu</i></a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flag"> Product</i> <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="/admin/action/addproduct"><i class="fa fa-plus-circle"> Thêm Product</i></a>
                                    </li>
                                    <li>
                                        <a href="/admin/listproduct"><i class="fa fa-list"> Danh sách Product</i></a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flag"> Hình ảnh</i> <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus-circle"> Thêm hình ảnh</i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-list"> Danh sách Hình ảnh</i></a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/blank-page">Blank Page</a>
                            </li>
                            <li>
                                <a href="/admin/login-page">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        <?php echo $__env->yieldContent('content'); ?>


    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/admin-page/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/admin-page/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/admin-page/vendor/metisMenu/metisMenu.min.js"></script>
<!-- DataTables JavaScript -->
<script src="/admin-page/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/admin-page/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="/admin-page/vendor/datatables-responsive/dataTables.responsive.js"></script>
<!-- Morris Charts JavaScript -->
<script src="/admin-page/vendor/raphael/raphael.min.js"></script>
<script src="/admin-page/vendor/morrisjs/morris.min.js"></script>
<script src="/admin-page/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/admin-page/dist/js/sb-admin-2.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>

