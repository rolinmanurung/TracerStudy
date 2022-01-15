<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumni;

class HalamanController extends Controller
{
    public function index()
    {

        return view('beranda');
    }

    public function laporan()
    {
        
        return view('halaman.laporan');
    }

    public function about()
    {
        
        return view('halaman.about');
    }

    public function ktp()
    {
        
        return view('halaman.ktp');
    }

    public function kta()
    {
        $users = User::get();
        return view('halaman.kta', compact("users"));
    }

    public function isikta($id)
    {
        $alumni = User::find($id);
        return view('/', compact("users"));
    }
}
