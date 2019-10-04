<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FrontController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login');
        }else{
            return view ('homeContent');
        }

    }
    public function login(){
        if(Session::get('login')){
            return redirect('home');
        }else{
            return view ('login');
        }
    }
    public function daftar(){
        if(Session::get('login')){
            return redirect('home');
        }else{
            return view ('register');
        }

    }
    public function loginPost(Request $request)
    {
        $request->email;
        $request->userId;
        $request->password;
        Session::put('login',true);
        echo 1;
    }
    public function loginAdmin(){
        if(Session::get('login')){
            return redirect('dashboard');
        }else{
            return view ('admin.loginAdmin');
        }
    }
    public function logout(){
        Session::flush();
    }
}
