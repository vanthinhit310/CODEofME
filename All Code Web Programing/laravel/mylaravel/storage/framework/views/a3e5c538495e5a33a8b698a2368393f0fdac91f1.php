<?php $__env->startSection('content'); ?>
    <script src="ckeditor/ckeditor.js"></script>
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
            <h1> Thêm bài viết mới </h1>
            <form action="/them-bai-viet-moi" method="post" class="form-group">
                <?php echo csrf_field(); ?>
                <label for=""> Tiêu đề bài viết: </label>
                <input type="text" class="form-control" name="title" placeholder="Tiêu đề bài viết"/>
                <label for=""> Nội dung bài viết: </label>
                <textarea id="editor1" name="content" cols="80" rows="10"> </textarea>

                <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->

                <label for=""> Tên tác giả: </label>
                <input type="text" class="form-control" name="author" placeholder="Tên tác giả"/>
                <label for=""> URL bài viết: </label>
                <input type="text" class="form-control" name="url" placeholder="URL bài viết"/>
                <label for=""> Loại bài viết: </label>
                <select class="form-control" name="loai-bai-viet" id="cate">
                    <?php $__currentLoopData = $dsloaibv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lbv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($lbv->ma); ?>"><?php echo e($lbv->tenlbv); ?></option>
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

<?php echo $__env->make('templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>