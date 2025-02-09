<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'password' => Hash::make('password'), // Hasheamos la contraseña
    ];
});

?>
