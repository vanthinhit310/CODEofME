<?php $__env->startSection('title'); ?>
    <title>Danh sách tài khoản quản trị</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Danh sách tài khoản</h1>
    <table style="text-align: center" width="100%" class="table table-striped table-bordered table-hover"
           id="dataTables-example">
        <thead>
        <tr>
            <th>Tên chủ tài khoản</th>
            <th>Email đăng kí</th>
            <th>Ngày tạo tài khoản</th>
            <th>Sửa thông tin tài khoản</th>
            <th>Xóa tài khoản</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $dsuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ds->name); ?></td>
                <td><?php echo e($ds->email); ?></td>
                <td><?php echo e($ds->date); ?></td>
                <td><a href="/admin/action/edituser?email=<?php echo e($ds->email); ?>"><i class="fa fa-edit"> Sửa</i></a></td>
                <td><a href="/controller/admin/action/delete-user?email=<?php echo e($ds->email); ?>" onclick="if (confirm('Bạn muốn xóa người dùng <?php echo e($ds->name); ?>?'))commentDelete(1); return false"><i class="fa fa-recycle"> Xóa</i></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>