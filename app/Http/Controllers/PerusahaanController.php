<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    


    public function index()
    {
        $data_perusahaan = \App\Perusahaan::all();
        return view('perusahaan.index', ['data_perusahaan'=>$data_perusahaan]);
    }


    public function create(Request $request)
    {
        \App\Perusahaan::create($request->all());
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $perusahaan = \App\Perusahaan::find($id);
        return view('perusahaan.edit',['perusahaan' => $perusahaan]);

    }

    public function update(Request $request,$id)
    {
        $perusahaan = \App\Perusahaan::find($id);
        $perusahaan->update($request->all());
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $perusahaan =\App\perusahaan::find($id);
        $perusahaan->delete();
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di hapus');
    }
}
