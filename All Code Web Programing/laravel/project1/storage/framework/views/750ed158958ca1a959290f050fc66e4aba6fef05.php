<?php $__env->startSection('title'); ?>
    <title>Thông tin sản phẩm</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script src="/ckeditor/ckeditor.js"></script>


    <div class="container">
        <h1 style="text-align: center; color: green"><?php echo e($product->tensanpham); ?></h1>
        <form id="form_add_us" method="post" action="" role="form">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Tên sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tensp"
                               value="<?php echo e($product->tensanpham); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Công nghệ màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cnmh"
                               value="<?php echo e($product->congnghemanhinh); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgmh"
                               value="<?php echo e($product->dophangiai); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ rộng màn hình: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="drmh"
                               value="<?php echo e($product->dorongmanhinh); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera sau: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgs"
                               value="<?php echo e($product->dophangiaicamerasau); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Bộ nhớ trong: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="bnt"
                               value="<?php echo e($product->bonhotrong); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thẻ SD: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tsd"
                               value="<?php echo e($product->thesd); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Mạng di động: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="mdd"
                               value="<?php echo e($product->mangdidong); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Giá sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="gia"
                               value="<?php echo e(number_format($product->gia, 0, '.', '.').' đ'); ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Độ phân giải Camera trước: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="dpgt"
                               value="<?php echo e($product->dophangiaicameratruoc); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Flash: </i></label><br/>
                        <?php if($product->denflash =='Yes'): ?>
                            <input type="radio" class="form-group" readonly="readonly" checked="checked" name="flash"
                                   value="Yes"> Có Flash
                            <input type="radio" class="form-group" readonly="readonly" name="flash" value="No"> Không
                            Flash
                        <?php endif; ?>
                        <?php if($product->denflash !='Yes'): ?>
                            <input type="radio" class="form-group" readonly="readonly" name="flash" value="Yes"> Có
                            Flash
                            <input type="radio" checked="checked" readonly="readonly" class="form-group" name="flash"
                                   value="No"> Không Flash
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Quay phim: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="qp"
                               value="<?php echo e($product->quayphim); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hệ điều hành: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="hdh"
                               value="<?php echo e($product->hedieuhanh); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chuẩn WIFI: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="wf"
                               value="<?php echo e($product->wifi); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hỗ trợ jack kết nối: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="jkn"
                               value="<?php echo e($product->jack); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kết nối khác: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="knk"
                               value="<?php echo e($product->ketnoikhac); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Dung lượng PIN: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="pin"
                               value="<?php echo e($product->dungluongpin); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thiết kế sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tk"
                               value="<?php echo e($product->thietke); ?>">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Chipset: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cs"
                               value="<?php echo e($product->chipset); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> CPU: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="cpu"
                               value="<?php echo e($product->tocdocpu); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> GPU: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="gpu"
                               value="<?php echo e($product->gpu); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Ram: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ram"
                               value="<?php echo e($product->ram); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha"
                               value="<?php echo e($product->hinhanhsanpham); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 1: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha1"
                               value="<?php echo e($product->hinhanh1); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Hình ảnh 2: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="ha2"
                               value="<?php echo e($product->hinhanh2); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Kích thước sản phẩm: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="kt"
                               value="<?php echo e($product->kichthuoc); ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><i class="fa fa-edit"> Thời gian ra mắt: </i></label>
                        <input type="text" class="form-control" readonly="readonly" name="tg"
                               value="<?php echo e($product->thoigianramat); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <h4><strong>Số lượng sản phẩm và tính năng</strong></h4>

                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Sale off: </i></label>
                    <input type="text" class="form-control" readonly="readonly" name="sale" value="<?php echo e($product->sale.'%'); ?>">
                </div>
                <div class="form-group">
                    <label for=""><i class="fa fa-edit"> Số lượng nhập: </i></label>
                    <input type="text" class="form-control" readonly="readonly" name="sl"
                           value="<?php echo e($product->soluongconlai.' cái'); ?>">
                </div>

                <label for=""><i class="fa fa-edit"> Tính năng đặc biệt: </i></label>
                <textarea name="tn" class="form-control" readonly="readonly" id="editor"
                          rows="10"><?php echo e($product->tinhnang); ?></textarea>
            </div>
            <hr/>
            <div class="row">
                <a href="/admin/listproduct" class="btn btn-outline btn-primary"><i class="fa fa-backward"></i> Danh sách sản phẩm</a>
                <a href="/admin/action/editproduct/<?php echo e($product->id); ?>" style="margin-left: 500px"
                   class="btn btn-outline btn-success">Sửa sản phẩm</a>
            </div>
            <br/>
        </form>
    </div>

    <script>
        CKEDITOR.replace('editor');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>