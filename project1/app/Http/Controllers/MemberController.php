<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class MemberController extends Controller
{
    public function addMember(Request $request)
    {
        $mem = new Member();
        $mem->name = $request->name;
        $mem->number = $request->phone;
        $mem->email = $request->email;
        $mem->password = md5($request->password);
        $mem->createdate = date('d/m/Y');
        $mem->role = 0;
        $mem->save();
        $data = array('host' => "Lê Văn Thịnh", 'email' => $mem->email);
        Mail::send('emails/mail', $data, function ($message) use ($mem) {
            $message->to($mem->email, 'Verify your account!')->subject
            ('Please verification your account now!');
            $message->from($mem->email, 'Lê Văn Thịnh');
        });
//        return redirect('/success-page');
        return response()->json([
            'data' => 'success'
        ]);
    }

    public function verifyMember(Request $request)
    {
        $email = $request->input('email');
        $dsMember = Member::all();
        foreach ($dsMember as $ds) {
            if ($ds->email == $email) {
                Member::where('email', $email)->update([
                    'role' => 1
                ]);
            }
        }
        return redirect('/verify-success');
    }

    public function loginMember(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $member = Member::where('email', $email)->first();
        if ($member->email == $email && $member->password == $password && $member->role == 1) {
            Session::put('member', $member);
            return response()->json([
                'data' => 'ok'
            ]);
        } else {
            return response()->json([
                'data' => 'faild'
            ]);
        }
    }

    public function logoutMember()
    {
        Session::put('member', null);
        return redirect('/');
    }

    public function changePassword(Request $request)
    {
        $email = Session::get('member')->email;
        $oldpass = md5($request->oldpass);
        $newpass = md5($request->newpass);
        $mem = Member::where('email', $email)->first();
        if ($mem->password == $oldpass) {
            Member::where('email', $email)->update([
                'password' => $newpass
            ]);
            Session::put('member', null);
            return response()->json([
                'ok' => 'success'
            ]);
        } else {
            return response()->json([
                'ok' => 'error'
            ]);
        }


    }

    public function forgotPassword(Request $request)
    {
        $email = $request->email;
        $mem = Member::where('email', $email)->first();
        if ($mem != null && $email == $mem->email) {
            Mail::send('emails/changepass', ['email' => $mem->email], function ($message) use ($email) {
                $message->to($email, 'Reset your password')->subject
                ('Reset your password now!');
                $message->from("khoacnttsmt@gmail.com", 'Lê Văn Thịnh');
            });
            return response()->json([
                'data' => 'ok'
            ]);
        } else {
            return response()->json([
                'data' => 'faild'
            ]);
        }

    }

    public function resetPassword(Request $request)
    {
        $email = $request->email;
        $new = md5($request->newpass);
        $mem = Member::where('email', $email)->first();
        if ($mem != null) {
            Member::where('email', $email)->update([
                'password' => $new
            ]);
            return response()->json([
                'data' => 'ok'
            ]);
        } else {
            return response()->json([
                'data' => 'faild'
            ]);
        }
    }
}
