<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Alumni;
use App\User;
use App\KuesionerTerhadapAlumni;
use App\KuesionerTerhadapPerusahaan;
use App\Mail\InfoKuesioner;
use App\Exports\AlumniExport;
use App\Imports\AlumniImport;
use Maatwebsite\Excel\Facades\Excel;


class DataAlumniController extends Controller
{

    public function index()
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

        return view('data_alumni.index', ['alumni' => $alumni, 'data_lama_waktu_tunggu' => $data_lama_waktu_tunggu, 'label_lama_waktu_tunggu' => $label_lama_waktu_tunggu, 'jumlah_alumni' => $jumlah_alumni, 'jumlah_ktp' => $jumlah_ktp, 'jumlah_kta' => $jumlah_kta]);
    }

    public function create()
    {
        return view('data_alumni.create');
    }


    public function store(Request $request)
    {
        // insert to table user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('password');
        $user->role = 'alumni';
        $user->remember_token = Str::random(10);
        $user->save();

        // insert ke table Alumni
        $request->request->add(['user_id' => $user->id]);
        $alumni = new \App\alumni;
        $alumni->user_id = $request->user_id;
        $alumni->alamat = $request->alamat;
        $alumni->no_handphone = $request->no_handphone;
        $alumni->nim = $request->nim;
        $alumni->jurusan = $request->jurusan;
        $alumni->prodi = $request->prodi;
        $alumni->jenjang = $request->jenjang;
        $alumni->tahun_masuk = $request->tahun_masuk;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->ipk = $request->ipk;
        $alumni->save();


        //insert ke table kta
        $request->request->add(['alumni_id' => $alumni->id]); 
        $kta = KuesionerTerhadapalumni::create($request->all());
        return redirect('data_alumni')->with('succes', 'Data berhasil di simpan');

    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('data_alumni.edit', compact('alumni'));
    }


    public function update(Request $request, $id)
    {   

        //cara pertama
        // $alumni = Alumni::find($id);
        // $alumni->user->name = $request->name;
        // $alumni->user->email = $request->email;
        // $alumni->alamat = $request->input('alamat');
        // $alumni->no_handphone = $request->input('no_handphone');
        // $alumni->nim = $request->input('nim');
        // $alumni->jurusan = $request->input('jurusan');
        // $alumni->prodi = $request->input('prodi');
        // $alumni->jenjang = $request->input('jenjang');
        // $alumni->tahun_masuk = $request->input('tahun_masuk');
        // $alumni->tahun_lulus = $request->input('tahun_lulus');
        // $alumni->ipk = $request->input('ipk');
        
        $alumni = Alumni::find($id);
        $alumni->update($request->all());
        $alumni->user->update($request->all());
        $alumni->save();
        $alumni->user->save();
        return redirect('data_alumni')->with('succes', 'Data berhasil di simpan');

    }

    public function delete($id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();
        $alumni->user->delete();
        session()->flash('succes', 'Data berhasil di hapus!');
        return redirect('data_alumni');
    }

    public function InfoKuesioner(Request $request, $id)
    {   
        $alumni = Alumni::find($id);
        Mail::to($alumni->user->email)->send(new InfoKuesioner());
        return redirect('data_alumni')->with('succes', 'Email pengisian tracer study berhasil di kirim');
    }


    public function export()
    {
        return Excel::download(new AlumniExport, 'Alumni.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
        'file' => 'required|max:10000|mimes:xlsx,xls', 
        ]);

        $file = $request->file('file');

        Excel::import(new AlumniImport, $file);
        session()->flash('succes', 'Data berhasil di import!');
        return redirect('data_alumni');    
    }

}
