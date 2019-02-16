<?php $__env->startSection('content'); ?>
    <?php echo e(date_default_timezone_set('Asia/Ho_Chi_Minh')); ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Danh sách bài viết
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Mã bài viết</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Tác giả</th>
                                <th>Views</th>
                                <th>Loại</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $dsBaiViet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsbv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($dsbv->mabv); ?></td>
                                    <td><?php echo e($dsbv->tieudebv); ?></td>
                                    <td><a target="_blank" href="/admin/sua-bai-viet-page/<?php echo e($dsbv->url); ?>"
                                           class="btn btn-link">Nội dung</a></td>
                                    <td><?php echo e($dsbv->tacgiabv); ?></td>
                                    <td><?php echo e($dsbv->luotxem); ?></td>
                                    <td><?php echo e($dsbv->maloaibv); ?></td>
                                    <td><a href="/admin/sua-bai-viet-page/<?php echo e($dsbv->url); ?>"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="/admin/xoa-bai/<?php echo e($dsbv->url); ?>" onclick="confirm('Bạn chắc rằng mình muốn xóa bài viết này?')"><i class="fas fa-trash"></i></a></td>

                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <div style="padding-left: 500px"><?php echo e($dsBaiViet->links()); ?></div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at <?php echo e(date('Y-m-d H:i:s')); ?></div>
            </div>

        </div>
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/admin/templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>