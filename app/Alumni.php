<?php

namespace App;

use App\KuesionerTerhadapAlumni;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table  = 'alumni';

    protected $fillable = [ 
        'user_id', 'alamat', 'no_handphone', 'nim', 'jurusan', 'prodi', 'jenjang', 'tahun_masuk', 'tahun_lulus', 'ipk'
    ];

    //relasi ke table User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relasi ke kuesioner Kta
    public function kta()
    
    {
        return $this->hasOne(KuesionerTerhadapAlumni::class);
    }

}
