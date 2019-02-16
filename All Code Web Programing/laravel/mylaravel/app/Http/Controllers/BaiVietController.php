<?php

namespace App\Http\Controllers;

use App\TbBaiViet;
use Illuminate\Http\Request;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class BaiVietController extends Controller
{
    public function addbv(Request $request)
    {
        $baiviet = new TbBaiViet();
        $milliseconds = round(microtime(true));
        $baiviet->mabv = $milliseconds;
        $baiviet->tieudebv = $request->input('title');
        $baiviet->ndbv = $request->input('content');
        $baiviet->tacgiabv = $request->input('author');
        $baiviet->luotxem = 0;
        $baiviet->maloaibv = $request->input('loai-bai-viet');
        $baiviet->url = str_slug($request->input('title'));
        $baiviet->image = $request->input('image');
        $baiviet->ngaydang = date('Y-m-d H:i:s');
        $baiviet->save();
        return redirect('/admin');
    }

    public function updatebv(Request $request)
    {
        $mabv = $request->input('mabv');
        $tieudebv = $request->input('title');
        $ndbv = $request->input('content');
        $tacgiabv = $request->input('author');
        $maloaibv = $request->input('loai-bai-viet');
        $url = str_slug($request->input('title'));
        $image = $request->input('image');
        $ngaydang = date('Y-m-d H:i:s');

        TbBaiViet::where('mabv', $mabv)->update([
            'tieudebv' => $tieudebv,
            'ndbv' => $ndbv,
            'tacgiabv' => $tacgiabv,
            'maloaibv' => $maloaibv,
            'url' => $url,
            'image' => $image,
            'ngaydang' => $ngaydang
        ]);
        return redirect('/admin/');
    }

    public function deleteBaiViet(Request $request)
    {
        $url = $request->url;
        TbBaiViet::where('url', $url)->delete();
        return redirect('/admin');
    }
}
