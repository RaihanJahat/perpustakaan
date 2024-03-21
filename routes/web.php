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

Route::get('tampil',[AdminContoller::class,'tampil']);

//User
Route::get('loguser',[UserController::class,'loguser']);
Route::get('sign-up-user',[UserController::class,'signupuser']);

//
Route::get('tambah',[AdminContoller::class,'tambah']);
Route::post('tambahBuku',[AdminContoller::class,'tambahBuku']);
//hapus :v
 Route::get('admin/hapus/{PetugasId}',[AdminContoller::class,'hapus']);

Route::get('hapusbuku/{id}',[AdminContoller::class,'hapusbuku']);