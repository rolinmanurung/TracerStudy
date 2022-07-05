<?php

namespace App\Imports;

use App\Alumni;
use App\User;
use App\KuesionerTerhadapAlumni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AlumniImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {

            $user = User::create([
                'name' => $row[0],
                'email' => $row[1],
                'password' => Hash::make('password'),
                'role' => $row[3],
            ]);

            $user->alumni()->create([
                'alamat' => $row[4],
                'no_handphone' => $row[5],
                'nim' => $row[6],
                'jurusan' => $row[7],
                'prodi' => $row[8],
                'jenjang' => $row[9],
                'tahun_masuk' => $row[10],
                'tahun_lulus' => $row[11],
                'ipk' => $row[12],
            ]);

            $user->alumni->kta()->create();
        }
    }
}
