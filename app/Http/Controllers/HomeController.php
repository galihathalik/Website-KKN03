<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
    	return view('contoh');
    }

    public function tambah(){
        $nama = "Galih";
        return view('contoh',['nama'=>$nama]);
    }

    public function kurang(){
        $nama = "Galih";
        $pelajaran = ["SI","WEb","TI"];
        return view('contoh',['nama'=>$nama, 'matkul'=>$pelajaran]);
    }
}
