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
    return view('index');
});


// Processing

//Đăng kí
Route::post('/controller/processing/register', 'MemberController@processRegister');
Route::post('/controller/processing/login', 'MemberController@processLogin');
Route::get('/test', 'MemberController@test');
