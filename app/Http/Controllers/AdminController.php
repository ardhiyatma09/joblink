<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('loginAdmin');
        }else{
            return view('admin.dashboard');
        }

    }
    public function register(){
        print_r(Session::get('login'));
        if(!Session::get('login')){
            return redirect('login');
        }else{
            return view('admin.registerAdmin');
        }

    }

}
