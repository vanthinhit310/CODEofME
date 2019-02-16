<?php $__env->startSection('content'); ?>
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
                <?php echo csrf_field(); ?>
                <label for=""> Mã bài viết: </label>
                <input type="text" class="form-control" readonly="readonly" name="mabv" value="<?php echo e($baiviet->mabv); ?>"/>
                <label for=""> Tiêu đề bài viết: </label>
                <input type="text" class="form-control" name="title" value="<?php echo e($baiviet->tieudebv); ?>"/>
                <label for=""> Nội dung bài viết: </label>
                <textarea id="editor1" name="content" cols="80" rows="10"><?php echo e($baiviet->ndbv); ?></textarea>

                <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->

                <label for=""> Tên tác giả: </label>
                <input type="text" class="form-control" value="<?php echo e($baiviet->tacgiabv); ?>" name="author"
                       placeholder="Tên tác giả"/>
                <label for=""> Lượt xem: </label>
                <input type="text" class="form-control" name="view" value="<?php echo e($baiviet->luotxem); ?>" disabled="disabled"/>
                <label for=""> URL bài viết: </label>
                <input type="text" class="form-control" name="url" value="<?php echo e($baiviet->url); ?>"
                       placeholder="URL bài viết"/>
                <label for=""> Link hình ảnh minh họa: </label>
                <input type="text" class="form-control" name="image" value="<?php echo e($baiviet->image); ?>" placeholder="Ảnh minh họa"/>
                <label for=""> Ngày đăng bài: </label>
                <input type="text" class="form-control" readonly="readonly" name="ngaydang" value="<?php echo e($baiviet->ngaydang); ?>"/>
                <label for=""> Loại bài viết: </label>
                <select class="form-control" name="loai-bai-viet" id="cate">
                    <?php $__currentLoopData = $dsloaibv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lbv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($lbv->maloaibv == $baiviet->maloaibv): ?>
                            <option selected value="<?php echo e($lbv->maloaibv); ?>"><?php echo e($lbv->tenlbv); ?></option>
                        <?php endif; ?>
                        <?php if($lbv->maloaibv != $baiviet->maloaibv): ?>
                            <option value="<?php echo e($lbv->maloaibv); ?>"><?php echo e($lbv->tenlbv); ?></option>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/admin/templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>