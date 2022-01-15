<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KuesionerTerhadapPerusahaan;
use Illuminate\Support\Facades\DB;
use App\Alumni;

class KuesionerController extends Controller
{
    public function ktp(Request $request)
    {
         // $ktp = DB::table('ktp')->insert();
        \App\KuesionerTerhadapPerusahaan::create($request->all());
        return redirect('/ktp')->with('sukses', 'Data berhasil di simpan');

    }
    public function isi_kta($id)
    {
        $User = \App\Alumni::find($id);
        return view('alumni/kuesioner',['alumni' => $alumni]);

    }
}
