<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pertanyaan;
use Faker\Generator as Faker;

$factory->define(Pertanyaan::class, function (Faker $faker) {
    return [
        'Kuesioner_id'=> 1,
        'pertanyaan' => $faker->sentence,
        'pilihan' => $faker->sentence,
        'jawaban' => $faker->sentence,

    ];
});
