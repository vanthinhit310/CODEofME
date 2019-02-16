<?php $__env->startSection('content'); ?>
    <script src="../ckeditor/ckeditor.js"></script>
    <style>
        label {
            font-weight: bold;
            font-size: 12px;
        }
    </style>

    <div id="content-wrapper">
        <div class="container">
            <div class="row">
                <h1> Sửa video: </h1>
                <h6 style="color: #0000cc; padding-top: 20px"><?php echo e($video->id.'-'.$video->titlevideo); ?></h6>
            </div>
            <form action="/controller/admin/edit-video" method="post" class="form-group">
                <?php echo csrf_field(); ?>
                <label for=""> ID video: </label>
                <input type="text" class="form-control" name="id" readonly="readonly" value="<?php echo e($video->id); ?>"/>
                <label for=""> Tiêu đề video: </label>
                <input type="text" class="form-control" name="title" value="<?php echo e($video->titlevideo); ?>"/>
                <label for=""> Link video: </label>
                <input type="text" class="form-control" name="link" value="<?php echo e($video->link); ?>"/>
                <label for=""> Link hình ảnh đại diện: </label>
                <input type="text" class="form-control" name="linkimage" value="<?php echo e($video->linkimage); ?>"/>
                <label for=""> Url bài viết: </label>
                <input type="text" class="form-control" name="url" value="<?php echo e($video->url); ?>"/>
                <label for=""> Lượt xem: </label>
                <input type="text" class="form-control" name="view" readonly="readonly" value="<?php echo e($video->luotxem); ?>"/>
                <label for=""> Mô tả video: </label>
                <textarea class="form-control" id="editor1" name="des" cols="80" rows="10"><?php echo e($video->des); ?></textarea>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/admin/templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>