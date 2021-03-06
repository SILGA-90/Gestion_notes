<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\users;
use Faker\Generator as Faker;

$factory->define(users::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'role' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
