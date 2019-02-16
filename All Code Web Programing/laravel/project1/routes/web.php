<?php

use \Illuminate\Http\Request;

/*------------------------------------------------------------------------------------------------------------*/
//Route Template Page
Route::get('/', function () {
    $dsProduct = \App\Product::paginate(8);
    if (Session::get('cart') == []) {
        Session::put('cart', []);
    }
    return view('/template/index', ['dsproduct' => $dsProduct]);
});
Route::get('/404-page', function () {
    return view('/template/404');
});
Route::get('/about-page', function () {
    return view('/template/about');
});
Route::get('/blog-page', function () {
    return view('/template/blog-index');
});
Route::get('/blog-view', function () {
    return view('/template/blog-single');
});
Route::get('/cart-page', function () {
    $cart = Session::get('cart');
    return view('/template/cart', ['cart' => $cart]);
});
Route::get('/checkout-page', function () {
    return view('/template/checkout');
});
Route::get('/contact-page', function () {
    return view('/template/contact');
});
Route::get('/login-page', function () {
    return view('/template/login');
});
Route::get('/register-page', function () {
    return view('/template/register');
});
Route::get('/product-page', function () {
    return view('/template/product');
});
Route::get('/details-page/{id}', function (Request $request) {
    $id = $request->id;
    $product = \App\Product::where('id', $id)->first();
    return view('/template/product-details', ['product' => $product]);
});
Route::get('/success-page', function () {
    return view('/template/success');
});
Route::get('/verify-success', function () {
    return view('/template/verify');
});
Route::get('/changepassword-page', function () {
    return view('/template/changepassword');
});
Route::get('/resetyourpassword-page', function () {
    return view('/template/forgotpassword');
});
Route::get('/set-new-password-page', function (Request $request) {
    $email = $request->email;
    return view('/template/resetyourpassword', ['email' => $email]);
});


/*------------------------------------------------------------------------------------------------------------*/
//Route page ADMIN PAGE
Route::get('/admin/', function () {
    return view('/admin/index');
});
Route::get('/admin/blank-page', function () {
    return view('/admin/blank');
});
Route::get('/admin/buttons-page', function () {
    return view('/admin/buttons');
});
Route::get('/admin/forms-page', function () {
    return view('/admin/forms');
});
Route::get('/admin/gird-page', function () {
    return view('/admin/gird');
});
Route::get('/admin/icons-page', function () {
    return view('/admin/icons');
});
Route::get('/admin/login-page', function () {
    return view('/admin/login');
});
Route::get('/admin/morris-page', function () {
    return view('/admin/morris-chart');
});
Route::get('/admin/notifications-page', function () {
    return view('/admin/notifications');
});
Route::get('/admin/panels-page', function () {
    return view('/admin/panels-wells');
});
Route::get('/admin/tables-page', function () {
    return view('/admin/tables');
});
Route::get('/admin/typographys-page', function () {
    return view('/admin/typographys');
});


/*------------------------------------------------------------------------------------------------------------*/
// route action admin
//user
Route::get('/admin/action/adduser', function () {
    return view('/admin/user-action/adduser');
});
Route::get('/admin/listuser', function () {
    $dsUser = \App\PjoneUser::all();
    return view('/admin/user-action/listuser', ['dsuser' => $dsUser]);
});
Route::get('/admin/action/edituser', function (Request $request) {
    $email = $request->email;
    $user = \App\PjoneUser::where('email', $email)->first();
    return view('/admin/user-action/edituser', ['user' => $user]);
});


// product
Route::get('/admin/action/addproduct', function () {
    return view('/admin/product-action/addproduct');
});
Route::get('/admin/listproduct', function () {
    $dsProduct = \App\Product::all();
    return view('/admin/product-action/listproduct', ['dsproduct' => $dsProduct]);
});
Route::get('/admin/action/viewdetailsproduct/{id}', function (Request $request) {
    $id = $request->id;
    $product = \App\Product::where('id', $id)->first();
    return view('/admin/product-action/viewproduct', ['product' => $product]);
});
Route::get('/admin/action/editproduct/{id}', function (Request $request) {
    $id = $request->id;
    $product = \App\Product::where('id', $id)->first();
    return view('/admin/product-action/editproduct', ['product' => $product]);
});


/*------------------------------------------------------------------------------------------------------------*/
//Route Controller

//admin
//user
Route::post('/controller/admin/action/adduser', 'UserController@addUser');
Route::post('/controller/admin/action/edit-user', 'UserController@editUser');
Route::get('/controller/admin/action/delete-user', 'UserController@deleteUser');


//product
Route::post('/controller/admin/action/addproduct', 'ProductController@addProduct');
Route::post('/controller/admin/action/editproduct', 'ProductController@editProduct');
Route::get('/controller/admin/action/delete-product', 'ProductController@deleteProduct');


//template
//member
Route::post('/controller/template/action/register', 'MemberController@addMember');
Route::get('/controller/template/action/verify', 'MemberController@verifyMember');
Route::post('/controller/template/action/login', 'MemberController@loginMember');
Route::get('/controller/template/action/logout', 'MemberController@logoutMember');
Route::post('/controller/template/action/changepassword', 'MemberController@changePassword');
Route::get('/controller/template/action/forgotpass', 'MemberController@forgotPassword');
Route::post('/controller/template/action/resetpassword', 'MemberController@resetPassword');


//cart
Route::get('/controller/template/cart/addProductToCart', 'CartController@themSanPhamVaoGioHang');
Route::get('/controller/template/cart/deleteProduct', 'CartController@deleteProduct');
Route::get('/controller/template/cart/updateQuantity', 'CartController@updateQuantity');
Route::get('/controller/template/cart/loaddata', 'CartController@loadData');

Route::get('/controller/template/cart/test', 'CartController@testCM');



//comment
Route::post('/controller/comment/action/addcomment', 'CommentController@addComment');


//contact
Route::post('/controller/contact/action/sentCT', 'ContactController@sendContact');



//Google Account
Route::get('/controller/google/action/regAccount', 'AccountGoogleController@registerWithGoogleAccount');

