<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $lang =\App\Lang::all();
    return view('index',['title'=> 'Home','lang'=>$lang]);
});
Route::get('/account/register_page', function () {
    return view('register_page');
});
Route::get('/account/login_page', function () {
    return view('login');
});Route::get('/account/forgot', function () {
    return view('reset');
});
Route::get('/account/changeyourpassword', function () {
    return view('changepass');
});
Route::get('/question/addquestion', function () {
    $lang =\App\Lang::all();
    return view('addquestion',['title'=>'Add question', 'lang'=>$lang]);
});

Route::post('/account/signupProcessing', 'UserController@addUser');
Route::post('/account/logintopage', 'UserController@loginProcess');
Route::get('/account/logout', 'UserController@logout');
Route::get('/account/test', 'UserController@test');
Route::post('/account/changePassword', 'UserController@changePassword');



//dai ca
Route::get('/{code}','PasteController@GetPaste');
Route::get('/a/{code}','PasteController@GetPasteA');

Route::get('/paste/all','PasteController@Pastes');
Route::get('/paste/search','PasteController@Search');

Route::post('/paste/edit-paste','PasteController@EditPaste');
Route::get('/paste/new-paste','PasteController@CreatePastePage');
Route::post('/paste/new-paste','PasteController@CreatePaste');


Route::get('/comment/add-new','CommentController@add');



Route::get('/t/t/test','QuestionController@test');

Route::get('/question/addQuestionProcess','QuestionController@addQuestion');

