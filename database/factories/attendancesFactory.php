<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\attendances;
use Faker\Generator as Faker;

$factory->define(attendances::class, function (Faker $faker) {

    return [
        'student_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'subject_id' => $faker->randomDigitNotNull,
        'teacher_id' => $faker->randomDigitNotNull,
        'attendance_statut' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
