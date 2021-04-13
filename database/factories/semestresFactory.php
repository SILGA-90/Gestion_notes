<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\semestres;
use Faker\Generator as Faker;

$factory->define(semestres::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'start_date' => $faker->word,
        'end_date' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
