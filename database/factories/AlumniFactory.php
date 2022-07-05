<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumni;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Alumni::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'alamat' => $faker->address(),
        'no_handphone' => $faker->phoneNumber(),
        'nim' =>$faker->$randomNumber($nbDigits = 10, $strict = false),
        'jurusan' => $faker->word(['asdasd']),
        'prodi' => $faker->randomElement(['"Teknik Informatika"', '"Teknik Geomatika"', '"Teknik Multimedia dan Jaringan"']),
        'tahun_masuk' => $faker->numberBetween(2000, 2017),
        'tahun_lulus' => $faker->numberBetween(2019, 2021),
        'ipk' => $faker->randomFloat($nbMaxDecimals = 2, $min = 2.5, $max = 4) // 3.4
    ];
});
