<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KuesionerTerhadapPerusahaan;


class DataPerusahaanController extends Controller
{
    public function index()
    {
        $ktp = KuesionerTerhadapPerusahaan::all();
        return view('data_perusahaan.index',compact("ktp"));
    }

    public function show($id)
    {
        $ktp = KuesionerTerhadapPerusahaan::findOrFail($id);
        return view('data_perusahaan.show',compact("ktp"));
    }
    
     public function delete($id)
    {
        $ktp = KuesionerTerhadapPerusahaan::find($id);
        $ktp->delete();
        session()->flash('succes', 'Data berhasil di hapus!');
        return redirect('data_perusahaan');
    }

}
