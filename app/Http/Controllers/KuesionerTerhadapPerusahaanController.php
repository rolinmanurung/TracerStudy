<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Facades\Excel;
use App\KuesionerTerhadapPerusahaan;
use App\Exports\KuesionerTerhadapPerusahaanExport;
class KuesionerTerhadapPerusahaanController extends Controller
{
    
    public function create()
    {
        return view('kuesioner_terhadap_perusahaan.create',['title'=>'Kuesioner Perusahaan']);
    }


    public function store(Request $request)
    {

        $validasiData = $request->validate([
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'no_handphone' => 'required',
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'email_perusahaan' => 'required',
            'nama_alumni' => 'required',
            'ktp1' => 'required',
            'ktp2' => 'required',
            'ktp3' => 'required',
            'ktp4' => 'required',
            'ktp5' => 'required',
            'ktp6' => 'required',
            'ktp7' => 'required',
            'ktp8' => 'required',
            'ktp9' => 'required',
            'ktp10' => 'required',
            'ktp11' => 'required',
            'ktp12' => 'required',
            'ktp13' => 'required',
            'ktp14' => 'required',
            'ktp15' => 'required',
            'ktp16' => 'required',

        ]);

        $data = $request->all();
        KuesionerTerhadapPerusahaan::create($data);
        session()->flash('succes', 'Berhasil menambahkan data kuesioner perusahaan!');
        return redirect('ktp');
    }
        // //insert ke table Users
        // $user = new \App\User;
        // $user->name = $request->nama;
        // $user->username = $request->nama;
        // $user->email = $request->email_perusahaan;
        // $user->password = bcrypt('password');
        // $user->role = 'perusahaan';
        // $user->remember_token = Str::random(10);
        // $user->save();

        // //insert ke table Perusahaan
        // $request->request->add(['user_id' => $user->id]);
        // $perusahaan = new \App\Perusahaan;
        // $perusahaan->user_id = $request->user_id;
        // $perusahaan->jabatan = $request->jabatan;
        // $perusahaan->no_handphone = $request->no_handphone;
        // $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        // $perusahaan->alamat_perusahaan = $request->alamat_perusahaan;
        // $perusahaan->nama_alumni = $request->nama_alumni;
        // $perusahaan->save();

        // //insert ke table ktp
        // $request->request->add(['perusahaan_id' => $perusahaan->id]); 
        // $ktp = KuesionerTerhadapPerusahaan::create($request->all());


    public function data_perusahaan()
    {
        $ktp = KuesionerTerhadapPerusahaan::all();
        return view('kuesioner_terhadap_perusahaan.data_perusahaan',compact("ktp"));
    }


    public function show($id)
    {
        $ktp = KuesionerTerhadapPerusahaan::findOrFail($id);
        return view('kuesioner_terhadap_perusahaan.show',compact("ktp"));
    }


     public function delete($id)
    {
        $ktp = KuesionerTerhadapPerusahaan::find($id);
        $ktp->delete();
        session()->flash('succes', 'Data berhasil di hapus!');
        return redirect('data_perusahaan');
    }
    

    public function export() 
    {
        return new KuesionerTerhadapPerusahaanExport();
    }

}
