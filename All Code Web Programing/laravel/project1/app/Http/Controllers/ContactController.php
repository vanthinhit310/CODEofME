<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $title = $request->title;
        $content = $request->mes;
        $data = array('nameSender' => $name, 'phoneSender' => $phone, 'emailSender' => $email, 'title' => $title, 'mess' => $content);
        Mail::send('emails/contactmail', $data, function ($message) use ($email, $name) {
            $message->to('thinh031097@gmail.com', 'Đánh giá phản hồi')->subject('Thư phản hồi');
            $message->from($email, $name);
        });
        return response()->json([
            'data' => 'ok'
        ]);
    }
}
