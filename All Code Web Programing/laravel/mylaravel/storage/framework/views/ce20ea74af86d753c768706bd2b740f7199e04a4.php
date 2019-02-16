<?php $__env->startSection('content'); ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 style="color: #843534; font-family: 'Times New Roman';font-weight: bold"><?php echo e($video->titlevideo); ?></h1>
                <hr/>
                <p class="video-container">
                    <iframe width="100%" height="auto" src="<?php echo e($video->link); ?>" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </p>
                <br/>
            </div>
            <div class="col-sm-1"></div>
            <div style="text-align: initial;padding-top: 100px" class="col-sm-3">
                <p><?php echo $video->des; ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>