@extends('layout')
@section('title')
    <title>Trang chủ</title>

@endsection
@section('content')
    <div class="shell">
        <!-- main -->
        <div class="main">
            <!-- slider-holder -->
            <section class="slider-section">
                <h2 class="alignleft">Không thay đổi<strong> KHÔNG</strong> có tương lai </h2>
                <a href="#" class="buy-btn">Wanna Buy One ?</a>
                <div class="cl">&nbsp;</div>
                <!-- slider -->
                <div class="slider-holder">
                    <span class="slider-shadow"></span>
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="page/css/images/slide-img.jpg" alt=""/>
                                <div class="slide-cnt">
                                    <q>Không có hạnh phúc trong việc sở hữu hay đón nhận, chỉ có hạnh phúc khi cho đi.</q>
                                    <p>Henry Drummond</p>
                                </div>
                            </li>
                            <li>
                                <img src="page/css/images/slider2.png" alt=""/>
                                <div class="slide-cnt">
                                    <q>Ko tin vào chính mình – tức là bạn đã thất bại một nửa trước khi bắt đầu.</q>
                                    <p>Sưu tầm</p>
                                </div>
                            </li>
                            <li>
                                <img src="page/css/images/slider3.png" alt=""/>
                                <div class="slide-cnt">
                                    <q>Giá trị đích thực của sự cho đi không nằm ở món quà lớn hay nhỏ, mà nằm ở tầm lòng của người cho.</q>
                                    <p>Sưu tầm</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of slider -->
            </section>
            <!-- slider-holder -->
            <!-- cols -->
            <section class="cols">
                <div class="col">
                    <h3 class="starter-ico"><a href="#">Starter Themes</a></h3>
                    <p>Integer aliquam, quam vel tempor porta, dolor tortor cursus elit, sit amet ultrices ipsum metus
                        quis
                        aliquam, quam vel tempor porta</p>
                    <a href="#" class="more">Read More</a>
                </div>
                <div class="col">
                    <h3 class="awesome-ico"><a href="#">Awesome Colours</a></h3>
                    <p>Integer aliquam, quam vel tempor porta, dolor tortor cursus elit, sit amet ultrices ipsum metus
                        quis
                        \aliquam, quam vel tempor porta</p>
                    <a href="#" class="more">Read More</a>
                </div>
                <div class="col">
                    <h3 class="save-ico"><a href="#">Save Time</a></h3>
                    <p>Integer aliquam, quam vel tempor porta, dolor tortor cursus elit, sit amet ultrices ipsum metus
                        quis
                        aliquam, quam vel tempor porta</p>
                    <a href="#" class="more">Read More</a>
                </div>

                <div class="cl">&nbsp;</div>
            </section>
            <!-- end of cols -->

            <!-- featured -->
            <section>
                <h3 class="alignleft">Featured Projects</h3>
                <a href="#" class="all-projects"><strong>+</strong>All projects</a>
                <div class="cl">&nbsp;</div>

                <div class="featured">
                    <div class="entry">
                        <a href="#"><em></em>
                            <img src="page/css/images/entry-img1.png" alt=""/>
                            <span>Integer Aliquam,Quam </span>
                        </a>
                        <strong></strong>
                    </div>
                    <div class="entry">
                        <a href="#"><em></em>
                            <img src="page/css/images/entry-img2.png" alt=""/>
                            <span>Integer Aliquam,Quam </span>
                        </a>
                        <strong></strong>
                    </div>
                    <div class="entry">
                        <a href="#"><em></em>
                            <img src="page/css/images/entry-img3.png" alt=""/>
                            <span>Integer Aliquam,Quam </span>
                        </a>
                        <strong></strong>
                    </div>
                    <div class="entry">
                        <a href="#"><em></em>
                            <img src="page/css/images/entry-img4.png" alt=""/>
                            <span>Integer Aliquam,Quam </span>
                        </a>
                        <strong></strong>
                    </div>
                    <div class="entry">
                        <a href="#"><em></em>
                            <img src="page/css/images/entry-img5.png" alt=""/>
                            <span>Integer Aliquam,Quam </span>
                        </a>
                        <strong></strong>
                    </div>
                    <div class="cl">&nbsp;</div>
                </div>
            </section>
            <!-- end of featured -->
        </div>
        <!-- end of main -->
    </div>
    <!-- end of shell -->
    <div id="footer-push"></div>
@endsection
