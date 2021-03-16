<?php

namespace App\Http\Controllers;

use Users;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
     public function index(){
        return view('alumni.index');
     }
}
