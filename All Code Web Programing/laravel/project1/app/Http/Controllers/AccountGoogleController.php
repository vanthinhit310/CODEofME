<?php

namespace App\Http\Controllers;

use App\Member;
use App\UserGoogle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class AccountGoogleController extends Controller
{
    //
    public function registerWithGoogleAccount(Request $request)
    {
        $memGG = new UserGoogle();
        $id = $request->id;
        $memGG->id = $request->id;
        $memGG->name = $request->name;
        $memGG->email = $request->email;
        $memGG->avatar = $request->avatar;
        $memGG->created_at = date('d/m/Y');
        $memGG->updated_at = date('d/m/Y');
        $mem = UserGoogle::where('id', $memGG->id);

        if ($mem != null) {
            $acc = new Member();
            $acc->name = $memGG->name;
            $acc->email = $memGG->email;
            Session::put('member', $acc);
            return response()->json([
                'data' => 'ok'
            ]);
        } else {
            $memGG->save();
            $acc = new Member();
            $acc->name = $memGG->name;
            $acc->email = $memGG->email;
            Session::put('member', $acc);
            return response()->json([
                'data' => 'faild'
            ]);
        }
    }
}
