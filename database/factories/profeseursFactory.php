<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\profeseurs;
use Faker\Generator as Faker;

$factory->define(profeseurs::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'lastt_name' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'nationality' => $faker->word,
        'no_CNIB' => $faker->word,
        'statut' => $faker->word,
        'enregistered_date' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
