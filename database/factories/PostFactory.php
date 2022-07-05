<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => \Str::slug($faker->sentence()),
        'body' => $faker->paragraph(1),
    ];
});
