<?php

namespace App\Exports;

use App\Alumni;
use App\KuesionerTerhadapAlumni;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AlumniExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): view
    {
        return view('exports.data_alumni', [
            'alumni' => Alumni::all()
        ]);
    }
}
