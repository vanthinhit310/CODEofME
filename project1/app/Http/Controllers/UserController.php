<?php

namespace App\Http\Controllers;

use App\PjoneUser;
use Illuminate\Http\Request;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $user = new PjoneUser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->date = date('Y-m-d H:i:s');
        $user->save();
        return redirect('/admin/listuser');
    }

    public function editUser(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $password = md5($request->password);
        $date = date('Y-m-d H:i:s');
        PjoneUser::where('email', $email)->update([
            'name' => $name,
            'password' => $password,
            'date' => $date
        ]);
        return redirect('/admin/listuser');
    }
    public  function deleteUser(Request $request){
        $email = $request->email;
        PjoneUser::where('email', $email)->delete();
        return redirect('/admin/listuser');
    }
}
