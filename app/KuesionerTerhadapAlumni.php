<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuesionerTerhadapAlumni extends Model
{
    protected $table  = 'kta';

    protected $fillable=['user_id','ktp1','ktp2','ktp3','ktp4','ktp5','ktp6','ktp7','ktp8','ktp9','ktp10','ktp11','ktp12','ktp13','ktp14','ktp15'];

    //relasi ke table user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
    