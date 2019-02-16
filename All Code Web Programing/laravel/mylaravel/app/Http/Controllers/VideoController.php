<?php

namespace App\Http\Controllers;

use App\TbVideo;
use Illuminate\Http\Request;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class VideoController extends Controller
{
    public function addVideo(Request $request)
    {
        $video = new TbVideo();
        $video->id = round(microtime(true));
        $video->titlevideo = $request->input('title');
        //xử lí link nhúng video vào website
        $endStr = str_after($request->input('link'), 'https://youtu.be/');
        $video->link = 'https://www.youtube.com/embed/' . $endStr;

        $video->ngaydang = date('Y-m-d H:i:s');
        $video->luotxem = 0;
        $video->linkimage = $request->input('linkimage');

        //chuyển một chuỗi thành một URL
        $video->url = str_slug($request->input('title'));
        $video->des = $request->input('des');
        $video->save();
        return redirect('/admin/list-video-page');
    }

    public function updateVideo(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $link = $request->link;
        $imageLink = $request->linkimage;
        $url = $request->url;
        $des = $request->des;

        TbVideo::where('id', $id)->update([
            'titlevideo' => $title,
            'link' => $link,
            'linkimage' => $imageLink,
            'url' => $url,
            'des' => $des
        ]);
        return redirect('/admin/list-video-page');
    }

    public function deleteVideo(Request $request)
    {
        $id = $request->id;
        TbVideo::where('id', $id)->delete();
        return redirect('/admin/list-video-page');
    }
}
