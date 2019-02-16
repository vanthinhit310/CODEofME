<?php $__env->startSection('title'); ?>
    <title>Thêm sản phẩm mới</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script src="/ckeditor/ckeditor.js"></script>


    <div class="container">
        <h1 style="text-align: center">Thêm sản phẩm mới</h1>
        <form id="form_add_us" method="post" action="/controller/admin/action/addproduct" role="form">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Tên sản phẩm: </i></label>
                        <input type="text" class="form-control" name="tensp">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Công nghệ màn hình: </i></label>
                        <input type="text" class="form-control" name="cnmh">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải màn hình: </i></label>
                        <input type="text" class="form-control" name="dpgmh">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ rộng màn hình: </i></label>
                        <input type="text" class="form-control" name="drmh">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera sau: </i></label>
                        <input type="text" class="form-control" name="dpgs">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Bộ nhớ trong: </i></label>
                        <input type="text" class="form-control" name="bnt">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thẻ SD: </i></label>
                        <input type="text" class="form-control" name="tsd">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Mạng di động: </i></label>
                        <input type="text" class="form-control" name="mdd">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Giá sản phẩm: </i></label>
                        <input type="text" class="form-control" name="gia">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera trước: </i></label>
                        <input type="text" class="form-control" name="dpgt">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Flash: </i></label><br/>
                        <input type="radio" class="form-group" checked="checked" name="flash" value="Yes"> Có Flash
                        <input type="radio" class="form-group" name="flash" value="No"> Không Flash
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Quay phim: </i></label>
                        <input type="text" class="form-control" name="qp">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hệ điều hành: </i></label>
                        <input type="text" class="form-control" name="hdh">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chuẩn WIFI: </i></label>
                        <input type="text" class="form-control" name="wf">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hỗ trợ jack kết nối: </i></label>
                        <input type="text" class="form-control" name="jkn">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kết nối khác: </i></label>
                        <input type="text" class="form-control" name="knk">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Dung lượng PIN: </i></label>
                        <input type="text" class="form-control" name="pin">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thiết kế sản phẩm: </i></label>
                        <input type="text" class="form-control" name="tk">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chipset: </i></label>
                        <input type="text" class="form-control" name="cs">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> CPU: </i></label>
                        <input type="text" class="form-control" name="cpu">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> GPU: </i></label>
                        <input type="text" class="form-control" name="gpu">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Ram: </i></label>
                        <input type="text" class="form-control" name="ram">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh sản phẩm: </i></label>
                        <input type="text" class="form-control" name="ha">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 1: </i></label>
                        <input type="text" class="form-control" name="ha1">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 2: </i></label>
                        <input type="text" class="form-control" name="ha2">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kích thước sản phẩm: </i></label>
                        <input type="text" class="form-control" name="kt">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thời gian ra mắt: </i></label>
                        <input type="text" class="form-control" name="tg">
                    </div>
                </div>
            </div>
            <div class="row">
                <h4><strong>Số lượng sản phẩm và tính năng</strong></h4>

                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Sale off: </i></label>
                    <input type="text" class="form-control" name="sale">
                </div>
                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Số lượng nhập: </i></label>
                    <input type="text" class="form-control" name="sl">
                </div>

                <label for=""><i class="fa fa-edit"> Tính năng đặc biệt: </i></label>
                <textarea name="tn" class="form-control" id="editor" rows="6"></textarea>

                <label for=""><i class="fa fa-edit"> Mô tả sản phẩm: </i></label>
                <textarea name="mota" class="form-control" id="editor1" rows="10"></textarea>
            </div>
            <hr/>
            <div class="row">
                <input style="margin-left: 500px" type="submit" value="Thực hiện"
                       class="btn btn-outline btn-success"/>
            </div>
        </form>
    </div>

    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>