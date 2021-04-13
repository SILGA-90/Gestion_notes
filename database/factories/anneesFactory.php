<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\annees;
use Faker\Generator as Faker;

$factory->define(annees::class, function (Faker $faker) {

    return [
        'annee_year' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
