<?php $__env->startSection('content'); ?>

    <div class="gallery" id="gallery">
        <div class="container">
            <div class="agileits-heading">
                <h1 style="color: #843534; font-family: 'UTM Ong Do Tre'">Video Highlight</h1>
            </div>
            <div class="w3-agileits-gallery-grids">
                <?php $__currentLoopData = $dsVideo->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <?php $__currentLoopData = $ds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsvd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-3">
                                <div class="grid">
                                    <figure>
                                        <img style="width: 100%; height: 200px" src="<?php echo e($dsvd->linkimage); ?>" alt=""/>
                                        <div style="text-align: left" class="category"><i class="fa fa-eye"> <?php echo e($dsvd->luotxem); ?></i></div>
                                        <p style="text-align: left"><a
                                                href="/play-video-page/<?php echo e($dsvd->url); ?>"><?php echo e(str_limit($dsvd->titlevideo, $limit = 65, $end = '...')); ?></a>
                                        </p>
                                    </figure>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div style="padding-left: 500px"><?php echo e($dsVideo->links()); ?></div>
                <div class="clearfix"></div>
                <script src="/video/js/lightbox-plus-jquery.min.js"></script>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('/templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>