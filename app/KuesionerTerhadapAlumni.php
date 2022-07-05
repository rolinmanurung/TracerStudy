<?php

namespace App;

use App\Alumni;
use App\User;
use Illuminate\Database\Eloquent\Model;
class KuesionerTerhadapAlumni extends Model
{
    protected $table  = 'kta';

    protected $fillable=['alumni_id','kta1','kta2','kta3','kta4','kta5','kta6','kta7','kta8','kta9','kta10','kta11','kta12','kta13','kta14','kta15'];



    //relasi ke table Alumni
    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }
}
    