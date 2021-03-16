<?php

namespace App\Http\Controllers;

use App\User;
use App\Alumni;
use App\Mail\NotifPengisianTS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function isiTracerStudy($id)
    {
    	$alumni = \App\Alumni::find($id);
    	\Mail::to($alumni->email)->send(new NotifPengisianTS($alumni));

    	return redirect('/manajemen-data-alumni')->with('sukses', 'email berhasil di kirim');
    }

    public function deleteAll(Request $request)
    {
    	$ids = $request->get('ids');
    	$dbs = $DB::table('alumni')->where('id', explode(',',$ids)->delete());
    	return redirect('/manajemen-data-alumni');
    }
}
