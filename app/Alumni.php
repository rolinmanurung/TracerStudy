<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table='alumni';
    protected $fillable=['user_id','nama','alamat','no_telp','nim','email','prodi','jenjang','t_masuk','t_lulus','ipk','kta1','kta2','kta3','kta4','kta5','kta6','kta7','kta8','kta9','kta10','kta11','kta12','kta13','kta14','kta15','kta16'];
}
