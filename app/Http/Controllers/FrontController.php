<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FrontController extends Controller
{
    public function index(){
        return view ('homeContent');
    }
    public function login(){
        return view ('login');
    }
    public function daftar(){
        return view ('register');
    }
    public function detail()
    {
        Session::put('login',true);
        echo 1;
    }
    public function loginAdmin(){
        return view('admin.loginAdmin');
    }
}
