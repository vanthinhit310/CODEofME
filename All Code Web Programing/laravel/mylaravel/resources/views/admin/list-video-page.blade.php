@extends('/admin/templates')
@section('content')
    {{date_default_timezone_set('Asia/Ho_Chi_Minh')}}
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Danh sách Video
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Mã Video</th>
                                <th>Tiêu đề</th>
                                <th>Đường dẫn</th>
                                <th>Ngày đăng</th>
                                <th>Views</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dsVideo as $dsvd)
                                <tr>
                                    <td>{{$dsvd->id}}</td>
                                    <td>{{$dsvd->titlevideo}}</td>
                                    <td>{{$dsvd->link}}</td>
                                    <td>{{$dsvd->ngaydang}}</td>
                                    <td>{{$dsvd->luotxem}}</td>
                                    <td><a href="/admin/update-video?url={{$dsvd->url}}"><i
                                                class="fas fa-edit"></i></a></td>
                                    <td><a href="/controller/admin/xoa-video/{{$dsvd->id}}"
                                           onclick="confirm('Bạn chắc rằng mình muốn xóa video này?')"><i
                                                class="fas fa-trash"></i></a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="padding-left: 500px">{{ $dsVideo->links() }}</div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at {{date('Y-m-d H:i:s')}}</div>
            </div>

        </div>
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
@endsection
