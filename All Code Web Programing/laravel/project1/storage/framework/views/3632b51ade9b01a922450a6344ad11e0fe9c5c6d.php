<?php $__env->startSection('title'); ?>
    <title>Chi tiết sản phẩm</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- product-single -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <!-- product-description -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <ul id="demo1_thumbs" class="slideshow_thumbs">
                                        <li>
                                            <a href="<?php echo e($product->hinhanh1); ?>" target="_blank">
                                                <div class=" thumb-img"><img src="<?php echo e($product->hinhanh1); ?>" alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($product->hinhanh2); ?>" target="_blank">
                                                <div class=" thumb-img"><img src="<?php echo e($product->hinhanh2); ?>" alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($product->hinhanh1); ?>" target="_blank" alt="">
                                                <div class=" thumb-img"><img src="<?php echo e($product->hinhanh1); ?>" alt=""></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div id="slideshow">
                                        <img style="width: 60%" src="<?php echo e($product->hinhanhsanpham); ?>" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-single">
                                        <h2><?php echo e($product->tensanpham); ?> </h2>
                                        <div class="product-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <span class="text-secondary">&nbsp;(4.8 Review Stars)</span>
                                        </div>
                                        <p class="product-price"
                                           style="font-size: 25px;"><?php echo e(number_format($product->gia - ($product->gia* ($product->sale/100)), 0, '.', '.').' đ'); ?>

                                            <strike style="font-size: 15px"><?php echo e(number_format($product->gia,0,'.','.').' đ'); ?></strike>
                                        </p>
                                        <p class="btn-link"><?php echo $product->mota; ?></p>
                                        <div class="product-quantity">
                                            <h5>Quantity</h5>
                                            <div class="quantity mb20">
                                                <input type="number" class="input-text qty text" step="1" min="1"
                                                       max="6" name="quantity" value="1" title="Qty" size="4"
                                                       pattern="[0-9]*">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default"><i
                                                class="fa fa-shopping-cart"></i>&nbsp;Add to cart
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head scroll-nav">
                        <div class="head-title"><a class="page-scroll active" href="#product">Product Details</a>
                            <a class="page-scroll" href="#rating">Ratings &amp; Reviews</a>
                            <a class="page-scroll" href="#review">Add Your Reviews</a></div>
                    </div>
                </div>
            </div>
            <!-- highlights -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="box" id="product">
                        <div class="box-body">
                            <div class="highlights">
                                <h4 class="product-small-title">Tính năng nổi bật</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="arrow">
                                            <?php echo $product->tinhnang; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="box" id="product">
                        <div class="box-body">
                            <div class="highlights">
                                <h4 class="product-small-title">Thông số kĩ thuật</h4>
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <table class="table table-responsive">
                                            <tbody>
                                            <tr>
                                                <th scope="row">Màn hình:</th>
                                                <td><?php echo $product->congnghemanhinh; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Hệ điều hành:</th>
                                                <td><?php echo e($product->hedieuhanh); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Camera sau:</th>
                                                <td><?php echo e($product->dophangiaicamerasau); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Camera trước:</th>
                                                <td><?php echo e($product->dophangiaicameratruoc); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">RAM:</th>
                                                <td><?php echo e($product->ram); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bộ nhớ trong:</th>
                                                <td><?php echo e($product->bonhotrong); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Dung lượng pin:</th>
                                                <td><?php echo e($product->dungluongpin); ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Chipset:</th>
                                                <td><?php echo e($product->chipset); ?></td>
                                            </tr>
                                            <p style="display: none"></p>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" class="btn btn-default btn-block" data-toggle="modal"
                                            data-target="#exampleModal">Xem cấu hình chi tiết
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rating reviews  -->
            <div id="rating">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box">
                            <div class="box-head">
                                <h3 class="head-title">Rating &amp; Reviews</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="rating-review">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <h1>4.8</h1>
                                            <div class="product-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <p class="text-secondary">20 Ratings &amp; 10 Reviews</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <h2>80%</h2>
                                            <p class="text-secondary">Based on 20 Recommendations.</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <h4>Have you used this product?</h4>
                                            <a href="#" class="btn btn-primary btn-sm">review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.rating reviews  -->
                <!-- customers review  -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box">
                            <div class="box-head">
                                <h3 class="head-title">Customer Reviews</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="customer-reviews">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <p class="reviews-text">By <span class="text-default">William Cassidy</span>
                                                on 13 August 2017 </p>
                                            <p>Suspendisse viverra nibh vel mattis aliqueroin ultricies vitaeex quis
                                                sceleriuisque eleifend convallis leoorbi ultricies turpis nullanec
                                                accumsan mi molestie nonaecenas cursus massa quis condimentum venenati
                                                uspendisse idmassaut lacus dignissim vestibuonec malesuada ultricies
                                                euismod. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customers review  -->
                <!-- reviews-form -->
                <div id="review">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="head-title">Add A Reviews</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="review-form">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-rating">
                                                    <h5>Your Rating : &nbsp;</h5>
                                                    <div class="star-rate" id="rateYo"></div>


                                                </div>
                                            </div>
                                            <form method="post" action="/controller/comment/action/addcomment">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" style="display: none" name="idsp" value="<?php echo e($product->id); ?>">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="name"></label>
                                                        <input id="name" name="name" type="text" class="form-control"
                                                               placeholder="Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="email"></label>
                                                        <input id="email" name="email" type="text" class="form-control"
                                                               placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="textarea"></label>
                                                        <textarea class="form-control" id="textarea" name="textarea"
                                                                  rows="4" placeholder="Enter your Reviews"></textarea>
                                                    </div>
                                                    <button id="submit" name="singlebutton" class="btn btn-primary">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.reviews-form -->


            </div>


        </div>
        <!-- /.product-description -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Thông số kĩ thuật chi
                        tiết <?php echo e($product->tensanpham); ?></h3>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <tbody>
                        <tr>
                            <th scope="row">Màn hình:</th>
                            <td><?php echo $product->congnghemanhinh; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Hệ điều hành:</th>
                            <td><?php echo e($product->hedieuhanh); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Camera sau:</th>
                            <td><?php echo e($product->dophangiaicamerasau); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Camera trước:</th>
                            <td><?php echo e($product->dophangiaicameratruoc); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">RAM:</th>
                            <td><?php echo e($product->ram); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bộ nhớ trong:</th>
                            <td><?php echo e($product->bonhotrong); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Dung lượng pin:</th>
                            <td><?php echo e($product->dungluongpin); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Chipset:</th>
                            <td><?php echo e($product->chipset); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Độ phân giải:</th>
                            <td><?php echo e($product->dophangiai); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Độ rộng màn hình:</th>
                            <td><?php echo e($product->dorongmanhinh); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Đèn Flase:</th>
                            <?php if($product->denflash == 'Yes'): ?>
                                <td>Hỗ trợ Flash 2 tông màu</td>
                            <?php endif; ?>
                            <?php if($product->denflash == 'No'): ?>
                                <td>Không hỗ trợ</td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <th scope="row">Quay phim:</th>
                            <td><?php echo e($product->quayphim); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CPU:</th>
                            <td><?php echo e($product->tocdocpu); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Card màn hình:</th>
                            <td><?php echo e($product->gpu); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Thẻ nhớ:</th>
                            <td><?php echo e($product->thesd); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Mạng di động:</th>
                            <td><?php echo e($product->mangdidong); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Chuẩn wifi:</th>
                            <td><?php echo e($product->wifi); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jack kết nối:</th>
                            <td><?php echo e($product->jack); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kết nối khác:</th>
                            <td><?php echo e($product->ketnoikhac); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kiểu thiết kế:</th>
                            <td><?php echo e($product->thietke); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kích thước:</th>
                            <td><?php echo e($product->kichthuoc); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Thời gian ra mắt:</th>
                            <td><?php echo e($product->thoigianramat); ?></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>