<?php $__env->startSection('content'); ?>
    <?php echo e(date_default_timezone_set('Asia/Ho_Chi_Minh')); ?>

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Danh sách Video
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Mã Video</th>
                                <th>Tiêu đề</th>
                                <th>Đường dẫn</th>
                                <th>Ngày đăng</th>
                                <th>Views</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $dsVideo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsvd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($dsvd->id); ?></td>
                                    <td><?php echo e($dsvd->titlevideo); ?></td>
                                    <td><?php echo e($dsvd->link); ?></td>
                                    <td><?php echo e($dsvd->ngaydang); ?></td>
                                    <td><?php echo e($dsvd->luotxem); ?></td>
                                    <td><a href="/admin/update-video?url=<?php echo e($dsvd->url); ?>"><i
                                                class="fas fa-edit"></i></a></td>
                                    <td><a href="/controller/admin/xoa-video/<?php echo e($dsvd->id); ?>"
                                           onclick="confirm('Bạn chắc rằng mình muốn xóa video này?')"><i
                                                class="fas fa-trash"></i></a></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="padding-left: 500px"><?php echo e($dsVideo->links()); ?></div>
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