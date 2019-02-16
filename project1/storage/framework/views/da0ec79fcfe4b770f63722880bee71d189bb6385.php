<?php $__env->startSection('title'); ?>
    <title>Danh sách sản phẩm</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Danh sách sản phẩm</h1>
    <table style="text-align: center" width="100%" class="table table-striped table-bordered table-hover"
           id="dataTables-example">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Action 1</th>
            <th>Action 2</th>
            <th>Action 3</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $dsproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->tensanpham); ?></td>
                <td><img style="width: 35px; height: 35px" src="<?php echo e($product->hinhanhsanpham); ?>" alt=""/></td>
                <td><?php echo e(number_format($product->gia, 0, '.', '.').' đ'); ?></td>
                <td><a href="/admin/action/viewdetailsproduct/<?php echo e($product->id); ?>" class="btn-link">Chi tiết</a></td>
                <td><a href="/admin/action/editproduct/<?php echo e($product->id); ?>"><i class="fa fa-edit"> Sửa</i></a></td>
                <td><a href="/controller/admin/action/delete-product/?id=<?php echo e($product->id); ?>" onclick="if (confirm('Bạn muốn xóa sản phẩm <?php echo e($product->tensanpham); ?> khỏi danh sách sản phẩm?'))commentDelete(1); return false"><i class="fa fa-recycle"> Xóa</i></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>