<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request, $id)
    {

        return view('users.setting');
    }
}
