@extends('templates')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="post blog-post col-lg-8">
                <div class="container">
                    <div class="post-single">
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="category"><a href="#">{{$motBaiViet->getLoai->tenlbv}}</a></div>
                                @if(Session::get('account')!= null)
                                <div class="btn-link"><a target="_blank" href="/admin/sua-bai-viet-page/{{$motBaiViet->url}}" class="btn btn-link">Sửa bài
                                        viết này</a></div>
                                @endif
                            </div>
                            <h1 style="color: #9c3328">{{$motBaiViet->tieudebv}}<a href="#"><i
                                        class="fa fa-bookmark-o"></i></a></h1>
                            <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#"
                                                                                                          class="author d-flex align-items-center flex-wrap">
                                    <div class="title"><span>{{$motBaiViet->tacgiabv}}</span></div>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="date"><i class="icon-clock"></i> {{$motBaiViet->ngaydang}}</div>
                                    <div class="views"><i class="icon-eye"></i> {{$motBaiViet->luotxem}} views</div>
                                </div>
                            </div>
                            <div class="post-body">
                                <p class="lead">{!!$motBaiViet->ndbv!!}</p>
                            </div>
                            <div class="post-tags"><a href="#" class="tag">#Business</a><a href="#"
                                                                                           class="tag">#Tricks</a><a
                                    href="#" class="tag">#Financial</a><a href="#" class="tag">#Economy</a></div>
                            <div style="width: 100%" class="fb-comments"
                                 data-href="http://spobiotri.site/{{$motBaiViet->mabv}}"
                                 data-numposts="5"></div>
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

@endsection
