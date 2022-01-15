<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table  = 'alumni';

    //relasi ke table user
    public function user()

    {
        return $this->belongsTo(User::class);
    }

    public function kta()
    
    {
        return $this->hasOne(KuesionerTerhadapAlumni::class);
    }


    

}
