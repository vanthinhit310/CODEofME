<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    //

    function generateRandomString($length = 12)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function addQuestion(Request $request)
    {
        $q = new Question();
        $q->code = $this->generateRandomString();
        $q->ques = $request->contentpaste;
        $q->re1 = $request->re1;
        $q->re2 = $request->re2;
        $q->re3 = $request->re3;
        $q->re4 = $request->re4;
        $q->correct = $request->correct;
        $q->lang = $request->typeqs;
        $q->style = $request->style;
        $q->adder = Session::get('acc')->name;
        $q->save();
        return redirect('/question/addquestion')->with('message', 'Question added');

    }

    public function test()
    {
        echo $this->generateRandomString();
    }
}
