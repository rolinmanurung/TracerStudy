<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumni;
use App\Mail\InfoKuesioner;
use App\Mail\InfoPengisianTracerStudy;
use Mail;
use App\User;

class MailController extends Controller
{
    public function InfoKuesioner(Request $request)
    {   
        $url = view('kta');
        $alumni = User::where('role', 'alumni')->value('email');
        // // Mail::to($email)->send(new InfoKuesioner());

        return view('data_alumni', compact('alumni'))->with('succes', 'Email berhasil di kirim');
    }
}
