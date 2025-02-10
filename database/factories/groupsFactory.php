<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\group_model;
use Faker\Generator as Faker;

$factory->define(group_model::class, function (Faker $faker) {
    static $matricula =1;
    
    return [
        
         'id'=>$this->faker->unique()->numerify('#####'),
         'matricula' => $matricula++,  // Genera un número aleatorio entre 1 y 9
            'name' => $this->faker->word(),
            'teacherId' => $this->faker->randomElement(['T001', 'T002', 'T003', 'T004']),
            'numStudents' => $this->faker->numberBetween(20, 40),
            // Modifica 'swift' p ara ser uno de los turnos: mañana, tarde o noche
            'swift' => $this->faker->randomElement(['mañana', 'tarde']),
            'grade' => $this->faker->numberBetween(1, 12),
            'created_at' => now(),
            'updated_at' => now(),
    ];
});
