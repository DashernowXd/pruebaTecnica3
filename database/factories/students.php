<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student_model;
use Faker\Generator as Faker;

$factory->define(Student_model::class, function (Faker $faker) {
    return [
        'matricula' => $faker->unique()->numerify('#####'), // Ejemplo: STU12345
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'age' => $faker->numberBetween(18, 30),
        'cellNum' => $faker->numerify('##########'), // Genera solo números
        'group_id' => $faker->numberBetween(1,9),
    ];
    
});
