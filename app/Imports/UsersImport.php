<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class UsersImport implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
        return new User([
            'name' => $row[1],
            'username' => $row[2],
            'email' => $row[3],
            'password' => Hash::make('password'),
            'role' => $row[5]
        ]);
    }
}
