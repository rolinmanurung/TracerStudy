<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumni;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


//Data-Alumni
    public function manajemenDataAlumni()
    {
        $data_alumni = \App\Alumni::all();
        return view('manajemen_alumni.index', ['data_alumni'=>$data_alumni]);
    }

     public function createDataAlumni(Request $request)
    {
        

        //Tambah ke tabel user
        $user = new User();
        $user->level = 'alumni';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //Tambah ke tabel alumni
        $request->request->add(['user_id'=>$user->id]);
        $alumni = \App\Alumni::create($request->all());
        return redirect('/manajemen-data-alumni')->with('sukses', 'Data berhasil di tambah');
    }


    public function editDataAlumni($id)
    {
        $alumni = \App\Alumni::find($id);
        return view('manajemen_alumni.edit',['alumni' => $alumni]);

    }   

    public function updateDataAlumni(Request $request,$id)
    {
        $alumni = \App\Alumni::find($id);
        $alumni->update($request->all());
        return redirect('/data-alumni')->with('sukses', 'Data berhasil di update');
    }

    public function deleteDataAlumni($id)
    {
        $alumni =\App\Alumni::find($id);
        $alumni->delete();
        return redirect('/manajemen_alumni')->with('sukses', 'Data berhasil di hapus');
    }


//Data-Perusahaan
    public function manajemenDataPerusahaan()
    {
        $data_perusahaan = \App\Perusahaan::all();
        return view('manajemen_perusahaan.index', ['data_perusahaan'=>$data_perusahaan]);
    }


    public function createDataPerusahaan(Request $request)
    {
        \App\Perusahaan::create($request->all());
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di tambah');
    }


    public function editDataPerusahaan($id)
    {
        $perusahaan = \App\Perusahaan::find($id);
        return view('manajemen_perusahaan.edit',['perusahaan' => $perusahaan]);

    }   

    public function updateDataPerusahaan(Request $request,$id)
    {
        $perusahaan = \App\Perusahaan::find($id);
        $perusahaan->update($request->all());
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di update');
    }

    public function deleteDataPerusahaan($id)
    {
        $perusahaan =\App\perusahaan::find($id);
        $perusahaan->delete();
        return redirect('/data-perusahaan')->with('sukses', 'Data berhasil di hapus');
    }
}
