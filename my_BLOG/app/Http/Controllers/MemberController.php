<?php

namespace App\Http\Controllers;

use App\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class MemberController extends Controller
{
    //
    public function processRegister(Request $request)
    {
        $u = new MyUser();
        $u->fullname = $request->fullname;
        $u->email = $request->email;
        $pass = $request->password;
        $u->password = Hash::make($pass);
        $u->create_at = date('Y-m-d H:i:s');
        $u->update_at = date('Y-m-d H:i:s');
        $u->phanquyen = 'user';
        $u->save();
        return response()->json([
            'result' => 'success'
        ]);
    }

    public function processLogin(Request $request)
    {
        $email = $request->mail;
        $password = $request->pass;
        $mem = MyUser::where('email', $email)->first();

        if (Hash::check($password, optional($mem)->password)) {
            Session::put('member', $mem);
            return response()->json([
                'result' => 'success'
            ]);
        } else {
            return response()->json([
                'result' => 'failure'
            ]);
        }
    }

    public function test()
    {
       $mail = '1@gmail.com';
       $m = MyUser::where('email', $mail)->first();
       var_dump($m. '\t');
       if (Hash::check('1', $m->password)){
           echo 'Đúng';
       }else{
           echo 'Sai con mẹ nó rồi';
       }
    }
}
