@extends('templates')
@section('content')

    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-8">
                <div class="container">
                    @foreach($dsBaiViet->chunk(2) as $dsBaiViet1)
                        <div class="row">
                            <!-- post -->
                            @foreach($dsBaiViet1 as $dsbv)
                                <article class="post col-xl-6">
                                    <div class="thumbnail"><a href="/{{$dsbv->maloaibv}}/{{$dsbv->url}}"><img
                                                style="width: 350px;height: 180px"
                                                src="{{$dsbv->image}}" alt="..."
                                                class="img-fluid"></a></div>
                                    <div class="post-details">
                                        <div class="post-meta d-flex justify-content-between">
                                            <div class="date meta-last">20 May | 2016</div>
                                            <div class="category"><a href="#">{{$dsbv->luotxem}} views</a></div>
                                        </div>
                                        <a href="/{{$dsbv->maloaibv}}/{{$dsbv->url}}">
                                            <h6 style="color: black">{{str_limit($dsbv->tieudebv,30, ' ...')}}</h6></a>
                                        <footer class="post-footer d-flex align-items-center"><a href="#"
                                                                                                 class="author d-flex align-items-center flex-wrap">
                                                <div class="title"><span>{{$dsbv->tacgiabv}}</span></div>
                                            </a>
                                            <div class="date"><i class="icon-clock"></i> {{$dsbv->ngaydang}}</div>
                                        </footer>
                                    </div>
                                </article>
                        @endforeach
                        <!-- post             -->
                        </div>
                @endforeach
                <!-- Pagination -->
                    <div class="row">
                        <div style="padding-left: 40%">
                            <nav aria-label="Page navigation example">
                                {{ $dsBaiViet->links() }}
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
@endsection
