<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{

    public function laporan(){
    	return view('laporan');
    }

    public function tentang(){
    	return view('tentang');
    }

    public function ktp()
    {
        return view('ktp');
    }

    public function kta()
    {
        $data_alumni = \App\Alumni::all();
        return view('kta', ['data_alumni'=>$data_alumni]);
    }

    public function dashboard()
    {
        return view('/dashboard');
    }


}
