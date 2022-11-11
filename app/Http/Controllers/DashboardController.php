<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('master/index');
    }

    public function strukturOrganisasi(){
        return view('struktur');
    }

    public function dataUmum(){
        return view('dataUmum');
    }

    //GAK KE PAKE
    public function dataKewenangan(){
        return view('dataUmum');
    }

    //GAK KEPAKE
    public function dataKelembagaan(){
        return view('dataUmum');
    }

    
}
