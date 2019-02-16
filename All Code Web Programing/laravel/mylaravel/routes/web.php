<?php

use Illuminate\Http\Request;


//Controller

//Xử lí bài viết
Route::post('/controller/admin/them-bai-viet-moi', 'BaiVietController@addbv');
Route::post('/controller/admin/login', 'AccountController@Login');
Route::post('/controller/admin/sua-bai-viet', 'BaiVietController@updatebv');
Route::get('/controller/admin/logout', 'AccountController@Logout');
Route::get('/controller/admin/xoa-bai/{url}', 'BaiVietController@deleteBaiViet');

//Xử lí video

Route::post('/controller/admin/add-new-video', 'VideoController@addVideo');
Route::post('/controller/admin/edit-video', 'VideoController@updateVideo');
Route::get('/controller/admin/xoa-video/{id}', 'VideoController@deleteVideo');


//Route

Route::get('/admin/', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    $baiviet = \App\TbBaiViet::paginate(6);
    return view('/admin/index', ['dsBaiViet' => $baiviet]);
});
Route::get('/admin/404-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/404');
});
Route::get('/admin/blank-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/blank');
});
Route::get('/admin/charst-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/charst');
});
Route::get('/admin/forgot-password-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/forgot-password');
});
Route::get('/admin/login-page', function () {

    return view('/admin/login');
});
Route::get('/admin/register-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/register');
});
Route::get('/admin/tables-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/tables');
});
Route::get('/admin/add-video-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    return view('/admin/add-video-page');
});
Route::get('/admin/list-video-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    $dsVideo = \App\TbVideo::paginate(5);
    return view('/admin/list-video-page', ['dsVideo' => $dsVideo]);
});


Route::get('/admin/update-video', function (Request $request) {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    $url = $request->input('url');
    $video = App\TbVideo::where('url', $url)->first();
    return view('/admin/update-info-video', ['video' => $video]);
});
Route::get('/admin/sua-bai-viet-page/{url}', function (Request $request) {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    $loaibv = App\TbLoaiBaiViet::all();
    $url = $request->url;
    $baiviet = App\TbBaiViet::where('url', $url)->first();
    return view('/admin/sua-bai-viet', ['dsloaibv' => $loaibv, 'baiviet' => $baiviet]);
});
Route::get('/admin/them-bai-viet-page', function () {
    if (Session::get('account') == null) {
        return redirect('/');
    }
    $loaibv = App\TbLoaiBaiViet::all();
    return view('/admin/them-bai-viet', ['dsloaibv' => $loaibv]);
});
Route::get('/', function () {
    $dsbaiviet = \App\TbBaiViet::paginate(6);
    return view('index', ['dsBaiViet' => $dsbaiviet]);
});


Route::get('/video-page', function () {
    $dsVideo = \App\TbVideo::paginate(8);
    return view('video-page', ['dsVideo' => $dsVideo]);
});
Route::get('/play-video-page/{url}', function (Request $request) {
    $url = $request->url;
    $video = \App\TbVideo::where('url', $url)->first();
    $viewold = $video->luotxem;
    $viewnew = $viewold+1;
    \App\TbVideo::where('url', $url)->update([
        'luotxem'=>$viewnew
    ]);
    $video2 = \App\TbVideo::where('url', $url)->first();
    return view('play-video-page', ['video' => $video2]);
});
Route::get('/picture-page', function () {
    return view('picture-page');
});

//
//
//

Route::get('/{maloaibaiviet}/{url}',
    function (Request $request) {
        $url = $request->url;
        $motbaiviet = App\TbBaiViet::where('url', $url)->first();
        $viewold = $motbaiviet->luotxem;
        $viewnew = $viewold + 1;
        \App\TbBaiViet::where('url', $url)->update([
            'luotxem' => $viewnew
        ]);
        $motbaiviet2 = App\TbBaiViet::where('url', $url)->first();
        return view('post', ['motBaiViet' => $motbaiviet2]);
    }
);


Route::get('/cam-nang', function () {
    $ml = 'cam-nang';
    $dsbv = \App\TbBaiViet::where('maloaibv', $ml)->paginate(6);
    return view('baiviettheocm', ['dsbvtheocm' => $dsbv]);
});
Route::get('/huong-dan', function () {
    $ml = 'huong-dan';
    $dsbv = \App\TbBaiViet::where('maloaibv', $ml)->paginate(6);
    return view('baiviettheocm', ['dsbvtheocm' => $dsbv]);
});

Route::get('/hinh-anh', function () {
    $ml = 'hinh-anh';
    $dsbv = \App\TbBaiViet::where('maloaibv', $ml)->paginate(6);
    return view('baiviettheocm', ['dsbvtheocm' => $dsbv]);
});

Route::get('/video', function () {
    $ml = 'video';
    $dsbv = \App\TbBaiViet::where('maloaibv', $ml)->paginate(6);
    return view('baiviettheocm', ['dsbvtheocm' => $dsbv]);
});

Route::get('/review', function () {
    $ml = 'review';
    $dsbv = \App\TbBaiViet::where('maloaibv', $ml)->paginate(6);
    return view('baiviettheocm', ['dsbvtheocm' => $dsbv]);
});
