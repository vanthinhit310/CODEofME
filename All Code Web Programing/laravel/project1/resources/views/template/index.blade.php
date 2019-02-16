@extends('template/template')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('slider')
    <div class="slider">
        <div class="owl-carousel owl-one owl-theme">
            <div class="item">
                <div class="slider-img">
                    <img
                        src="https://cdn.shopify.com/s/files/1/0808/0067/files/category_banner_ipxs_2018.jpg?4226209007599050600"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="slider-img"><img
                        src="https://images.samsung.com/is/image/samsung/p5/in/microsite/galaxy-a9/a9_header_banner.jpg?$ORIGIN_JPG$"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="slider-img"><img
                        src="https://cdn.shopify.com/s/files/1/0810/8331/files/category_banner_pixel2_xl.jpg?1814908083541045855"
                        alt=""></div>
            </div>
        </div>
    </div>
    <!-- /.slider -->
@endsection

@section('content')
    <!-- mobile showcase -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo ">
                            <a href="#"> <img src="/view-page/images/nexus.png" alt=""></a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"> <img
                                    src="https://cdn.shopify.com/s/files/1/0259/1735/products/nexus_5x_skins_template_2048x.png?v=1535449770"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="showcase-block active">
                        <div class="display-logo alignleft">
                            <a href="#"> <img src="/view-page/images/iphone.png" alt="">
                            </a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"> <img
                                    src="https://vignette.wikia.nocookie.net/ipod/images/5/5f/Iphone-6.png/revision/latest?cb=20150920170950"
                                    alt="" style="padding-left: 80px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="showcase-block ">
                        <div class="display-logo ">
                            <a href="#"> <img src="/view-page/images/samsung.png" alt="">
                            </a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"><img
                                    src="https://www.samsung.com/global/galaxy/main/images/banner_galaxy-s9.png"
                                    alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo ">
                            <a href="#"><img src="/view-page/images/htc.png" alt=""></a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"><img src="http://www.stickpng.com/assets/images/58ac4d500aaa10546adf2710.png"
                                             alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo">
                            <a href="#"> <img src="/view-page/images/alcatel.png" alt=""></a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"> <img
                                    src="https://www.alcatelmobile.com/media/catalog/product/cache/image/1100x1100/e9c3970ab036de70892d86c6d221abfe/a/l/alcatel5_1.png"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo ">
                            <a href="#"><img src="/view-page/images/pixel.png" alt=""></a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"> <img src="http://www.stickpng.com/assets/images/58aefac1c869e092af51ee68.png"
                                              alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo ">
                            <a href="#"> <img src="/view-page/images/vivo.png" alt=""></a>
                        </div>
                        <div class="showcase-img">
                            <a href="#"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBv6h2oTzPVqh8paqTHAcjJa4L3jfcU0N1vpz3vQY7FpP1KSOg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.mobile showcase -->
    <!-- latest products -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h3 class="head-title">Latest Product</h3>
                    </div>
                    <div class="box-body">
                        @foreach($dsproduct->chunk(4) as $dsSanpham)
                            <div class="row">
                            @foreach($dsSanpham as $dssp)
                                <!-- product -->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-block">
                                            <div class="product-img"><img src="{{$dssp->hinhanhsanpham}}"
                                                                          alt="">
                                            </div>
                                            <div class="product-content">
                                                <h5><a href="/details-page/{{$dssp->id}}"
                                                       class="product-title">{{str_limit($dssp->tensanpham, $limit = 50, $end = '...')}}</a>
                                                </h5>
                                                <div class="product-meta"><p
                                                        class="product-price">{{number_format($dssp->gia - ($dssp->gia* ($dssp->sale/100)), 0, '.', '.').' đ'}}</p>
                                                    <p class="discounted-price">{{number_format($dssp->gia, 0, '.', '.').' đ'}}</p>
                                                    <span style="color: red"
                                                          class="offer-price">{{$dssp->sale.'% off'}}</span>
                                                </div>
                                                <div class="shopping-btn">
                                                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                                    <button id="{{$dssp->id}}" type="button"
                                                            class="product-btn btn-cart muahang"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- /.product -->
                            </div>
                        @endforeach
                    </div>
                    <div style="text-align: center">
                        {{ $dsproduct->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.latest products -->
@endsection
