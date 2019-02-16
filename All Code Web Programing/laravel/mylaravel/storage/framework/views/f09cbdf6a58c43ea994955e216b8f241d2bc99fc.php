<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-8">
                <div class="container">
                    <?php $__currentLoopData = $dsBaiViet->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsBaiViet1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <!-- post -->
                            <?php $__currentLoopData = $dsBaiViet1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsbv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="post col-xl-6">
                                    <div class="thumbnail"><a href="/<?php echo e($dsbv->maloaibv); ?>/<?php echo e($dsbv->url); ?>"><img
                                                style="width: 350px;height: 180px"
                                                src="<?php echo e($dsbv->image); ?>" alt="..."
                                                class="img-fluid"></a></div>
                                    <div class="post-details">
                                        <div class="post-meta d-flex justify-content-between">
                                            <div class="date meta-last">20 May | 2016</div>
                                            <div class="category"><a href="#"><?php echo e($dsbv->luotxem); ?> views</a></div>
                                        </div>
                                        <a href="/<?php echo e($dsbv->maloaibv); ?>/<?php echo e($dsbv->url); ?>">
                                            <h6 style="color: black"><?php echo e(str_limit($dsbv->tieudebv,30, ' ...')); ?></h6></a>
                                        <footer class="post-footer d-flex align-items-center"><a href="#"
                                                                                                 class="author d-flex align-items-center flex-wrap">
                                                <div class="title"><span><?php echo e($dsbv->tacgiabv); ?></span></div>
                                            </a>
                                            <div class="date"><i class="icon-clock"></i> <?php echo e($dsbv->ngaydang); ?></div>
                                        </footer>
                                    </div>
                                </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- post             -->
                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Pagination -->
                    <div class="row">
                        <div style="padding-left: 40%">
                            <nav aria-label="Page navigation example">
                                <?php echo e($dsBaiViet->links()); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4">
                <!-- Widget [Search Bar Widget]-->
                <div class="widget search">
                    <header>
                        <h3 class="h6">Search the blog</h3>
                    </header>
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <input type="search" placeholder="What are you looking for?">
                            <button type="submit" class="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Widget [Latest Posts Widget]        -->
                <div class="widget latest-posts">
                    <header>
                        <h3 class="h6">Latest Posts</h3>
                    </header>
                    <div class="blog-posts"><a href="#">
                            <div class="item d-flex align-items-center">
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a><a href="#">
                            <div class="item d-flex align-items-center">
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a><a href="#">
                            <div class="item d-flex align-items-center">
                                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                                    <div class="d-flex align-items-center">
                                        <div class="views"><i class="icon-eye"></i> 500</div>
                                        <div class="comments"><i class="icon-comment"></i>12</div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <!-- Widget [Categories Widget]-->
                <div class="widget categories">
                    <header>
                        <h3 class="h6">Categories</h3>
                    </header>
                    <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
                    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
                </div>
                <!-- Widget [Tags Cloud Widget]-->
                <div class="widget tags">
                    <header>
                        <h3 class="h6">Tags</h3>
                    </header>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
                        <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>