@extends('/templates')
@section('content')

    <div class="gallery" id="gallery">
        <div class="container">
            <div class="agileits-heading">
                <h1 style="color: #843534; font-family: 'UTM Ong Do Tre'">Video Highlight</h1>
            </div>
            <div class="w3-agileits-gallery-grids">
                @foreach($dsVideo->chunk(4) as $ds)
                    <div class="row">
                        @foreach($ds as $dsvd)
                            <div class="col-sm-3">
                                <div class="grid">
                                    <figure>
                                        <img style="width: 100%; height: 200px" src="{{$dsvd->linkimage}}" alt=""/>
                                        <div style="text-align: left" class="category"><i class="fa fa-eye"> {{$dsvd->luotxem}}</i></div>
                                        <p style="text-align: left"><a
                                                href="/play-video-page/{{$dsvd->url}}">{{str_limit($dsvd->titlevideo, $limit = 65, $end = '...')}}</a>
                                        </p>
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <div style="padding-left: 500px">{{ $dsVideo->links() }}</div>
                <div class="clearfix"></div>
                <script src="/video/js/lightbox-plus-jquery.min.js"></script>
            </div>
        </div>
    </div>

@endsection
