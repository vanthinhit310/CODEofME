<?php $__env->startSection('title'); ?>
    <title>Home</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1>Thịnh</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/admin/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
