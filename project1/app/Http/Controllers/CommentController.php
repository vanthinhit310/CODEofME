<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
date_default_timezone_set('Asia/Ho_Chi_Minh');

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $com = new Comment();
        $id = $request->idsp;
        $com->name = $request->name;
        $com->email = $request->email;
        $com->comment = $request->textarea;
        $com->date = date('Y-m-d');
        $com->time = date('H:i:s');
        $com->save();
        return redirect("/details-page/{$id}");
    }
}
