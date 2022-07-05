<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Alumni;
use App\Post;
use App\KuesionerTerhadapAlumni;
use App\KuesionerTerhadapPerusahaan;


class HalamanController extends Controller
{ 
    public function index()
    {
         
        return view('beranda', [

            'posts' => Post::latest()->simplePaginate(3),
        ]);
    }

    public function laporan()
    {
        $alumni = Alumni::all();
        $kta = KuesionerTerhadapalumni::all();
        $ktp = KuesionerTerhadapPerusahaan::all();


        //statistic lama waktu tunggu berkerja 
        //label
        $label_lama_waktu_tunggu = [];

        //data
        $data_lama_waktu_tunggu = [];

        foreach($alumni as $data){
            $label_lama_waktu_tunggu[] = $data->kta->kta2;
            $data_lama_waktu_tunggu[] = $data->kta->kta2;
        }

        $data_lama_waktu_tunggu = array_replace($data_lama_waktu_tunggu, array_fill_keys(array_keys($data_lama_waktu_tunggu, null), '')) ;
        $data_lama_waktu_tunggu = array_count_values($data_lama_waktu_tunggu);
        $data_lama_waktu_tunggu = array_unique($data_lama_waktu_tunggu);
        $data_lama_waktu_tunggu = array_values($data_lama_waktu_tunggu);

        $label_lama_waktu_tunggu = array_unique($label_lama_waktu_tunggu);
        $label_lama_waktu_tunggu = array_values($label_lama_waktu_tunggu);



        $jumlah_alumni = $alumni->count();
        $jumlah_ktp = $ktp->count(); 
        $jumlah_kta = $kta->count(); 

        // dd($label_lama_waktu_tunggu,$data_lama_waktu_tunggu);

        return view('halaman.laporan', ['alumni' => $alumni, 'data_lama_waktu_tunggu' => $data_lama_waktu_tunggu, 'label_lama_waktu_tunggu' => $label_lama_waktu_tunggu, 'jumlah_alumni' => $jumlah_alumni, 'jumlah_ktp' => $jumlah_ktp, 'jumlah_kta' => $jumlah_kta]);
    }

    public function about()
    {
        
        return view('halaman.about');
    }

    
}
