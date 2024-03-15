<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    public function index(){
        return view('admin/index');
    }
    public function signin(){
        return view('admin/sign-in');
    }
    public function signup(){
        return view('admin/sign-up');
    }
    public function tables(){
        return view('admin/tables');
    }
    public function tambah(){
        return view('admin/tambah');
    }
}
