<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionerPerusahaanController extends Controller
{
    public function create(Request $request)
    {
        \App\Perusahaan::create($request->all());
        return redirect('/ktp')->with('sukses', 'Data berhasil di simpan');
    }
}
