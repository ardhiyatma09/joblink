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
Route::get('/profile','FrontController@profile');
Route::get('/loginPost','FrontController@detail');

//Admin

Route::get('/loginAdmin','FrontController@loginAdmin');
Route::get('/dashboard','AdminController@index');
Route::get('/user','FirebaseAdminController@index');
Route::get('/list','FirebaseAdminController@listJob');
Route::get('/regisadmin','AdminController@register');




