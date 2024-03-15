<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loguser(){
        return view('user/loguser');
    }
    public function signupuser(){
        return view('user/sign-up-user');
    }
}
