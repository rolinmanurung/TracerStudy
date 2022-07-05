<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\KuesionerTerhadapAlumni;
use App\Alumni;
use App\User;

class AlumniController extends Controller
{

    public function index()
    {
        return view('alumni.index');
    }

// edit data alumni
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {   
        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());
        $alumni->user->update($request->all());
        $alumni->save();
        $alumni->user->save();
        return redirect('alumni')->with('succes', 'Data berhasil di simpan');
    }
//------------------



// edit kuesioner pada akun alumni
     public function kuesioner($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.kuesioner', compact('alumni'));
    }

    public function update_kuesioner(Request $request, $id)
    {
        $kta = KuesionerTerhadapAlumni::findOrFail($id);
        $kta->update($request->all());
        $kta->save();
        return redirect('alumni')->with('succes', 'Data berhasil di simpan');
    }
//------------------
}
