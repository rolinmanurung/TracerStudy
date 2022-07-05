<?php

namespace App;

use App\Perusahaan;
use App\KuesionerTerhadapPerusahaan;
use Illuminate\Database\Eloquent\Model;

class KuesionerTerhadapPerusahaan extends Model
{
     protected $table  = 'ktp';

     protected $fillable = ['nama','jabatan','no_handphone','nama_perusahaan','alamat_perusahaan','email_perusahaan','nama_alumni','ktp1','ktp2','ktp3','ktp4','ktp5','ktp6','ktp7','ktp8','ktp9','ktp10','ktp11','ktp12','ktp13','ktp14','ktp15','ktp16'
     ];

}
