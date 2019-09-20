<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view ('homeContent');
    }

    public function add(){
        return view ('addJob');
    }
    public function login(){
        return view ('login');
    }
    public function daftar(){
        return view ('register');
    }
    public function detail(){
        return view ('detailJob');
    }
}
