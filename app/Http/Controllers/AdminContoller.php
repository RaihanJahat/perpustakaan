<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Buku;
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
        $b= new Buku();
        return view('admin/tables',['data'=>$b->all()]);
    }
    public function tambah(){
        return view('admin/tambah');
    }

    public function tambahBuku(Request $request)
    {
        $b = new Buku();
        $b->create($request->all());
        return redirect('tables');
    }

    public function hapus($PetugasId){
        $siswa = new Admin();
        $siswa = $siswa->find($PetugasId);
        $siswa->delete();
        return back()->with('pesan', 'selamat, registrasi berhasil');
    }
    public function hapusbuku($id){
        $e = Buku::where('BukuID',$id)->delete();
        return back();

        
    }
}
