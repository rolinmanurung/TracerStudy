<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumni;
use App\KuesionerTerhadapAlumni;


class KuesionerTerhadapAlumniController extends Controller
{
    public function index()
    {
        $kta = KuesionerTerhadapAlumni::all();
        return view('kuesioner_terhadap_alumni.index',['title'=>'Kuesioner Alumni'], compact('kta'));
    }

    public function edit($id)
    {
        $kta = KuesionerTerhadapAlumni::findOrFail($id);
        return view('kuesioner_terhadap_alumni.edit', compact('kta'));
    }

    public function update(Request $request, $id)
    {   
        $kta = KuesionerTerhadapAlumni::findOrFail($id);
        $kta->update($request->all());
        return redirect('kta')->with('succes', 'Data berhasil di simpan');

    }

    public function kuesioner_edit($id)
    {
        $kta = KuesionerTerhadapAlumni::findOrFail($id);
        $kta->update($request->all());
        $kta->save();
        return view('kuesioner_terhadap_alumni.kuesioner_edit',['title'=>'Kuesioner Alumni'], compact('kta'));
    }


}
