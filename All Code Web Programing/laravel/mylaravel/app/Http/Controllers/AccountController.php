<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AccountController extends Controller
{
    public function Login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $acc = \App\TbAccount::where('email', $email)->where('matkhau', $password)->first();
        if ($acc != null) {
            Session::put('account', $acc);
            return redirect('/');
        } else {
            echo "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin";
        }
    }

    public function Logout()
    {
        Session::put('account', null);
        return redirect('/');
    }
}
