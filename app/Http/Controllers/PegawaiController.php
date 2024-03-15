<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function index(){
    $p = new Pegawai();
    return view('welcome',['pegawai'=>$p->paginate(10)]);
    }


}
