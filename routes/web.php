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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login','FrontController@login');
Route::get('/daftar','FrontController@daftar');
Route::get('/home','FrontController@index');
Route::get('/loginPost','FrontController@loginPost');
Route::get('/logout','FrontController@logout');

//Admin

Route::get('/loginAdmin','FrontController@loginAdmin');
Route::get('/dashboard','AdminController@index');
Route::get('/user','FirebaseAdminController@index');
Route::get('/list','FirebaseAdminController@listJob');
Route::get('/regisadmin','AdminController@register');

//Download App
Route::get('/download', function(){
    $file = public_path()."/joblink.apk";

    $header = array(
        'Content-Type: application/pdf',
    );
    return Response::download($file, "joblink.apk",$header);
});




