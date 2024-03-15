<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Admin
Route::get('',[AdminContoller::class,'index']);
Route::get('dashboard',[AdminContoller::class,'dashboard']);
Route::get('signin',[AdminContoller::class,'signin']);
Route::get('signup',[AdminContoller::class,'signup']);
Route::get('tables',[AdminContoller::class,'tables']);
Route::get('tambah',[AdminContoller::class,'tambah']);

//User
Route::get('loguser',[UserController::class,'loguser']);
Route::get('sign-up-user',[UserController::class,'signupuser']);