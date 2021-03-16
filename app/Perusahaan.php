<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table='perusahaan';
    protected $fillable=['nama','n_p','jabatan','email','no_telp','n_a','ktp1','ktp2','ktp3','ktp4','ktp5','ktp6','ktp7','ktp8','ktp9','ktp10','ktp11','ktp12','ktp13','ktp14','ktp15','ktp16'];
}
