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
    return view('indexpage/index');
});
Route::get('/register_page', function () {
    return view('indexpage/register_page');
});
Route::get('/login_page', function () {
    return view('indexpage/login');
});Route::get('/forgot', function () {
    return view('indexpage/reset');
});
Route::get('/about', function () {
    return view('indexpage/about');
});
Route::get('/contact', function () {
    return view('indexpage/contact');
});
