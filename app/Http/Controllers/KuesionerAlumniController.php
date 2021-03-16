<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionerAlumniController extends Controller
{
    public function kuesioner($id)
    {
        $alumni = \App\Alumni::find($id);
        return view('alumni/kuesioner',['alumni' => $alumni]);

    }

    public function update(Request $request,$id)
    {
        $alumni = \App\Alumni::find($id);
        $alumni->update($request->all());
        return redirect('/kta')->with('sukses', 'Data berhasil di simpan');
    }

}
