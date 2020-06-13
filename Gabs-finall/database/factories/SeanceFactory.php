<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seance;
use App\User;


use Faker\Generator as Faker;

$factory->define(Seance::class, function (Faker $faker) {
    return [
     'user_id' => User::get('id')->random(),
      
    
        'date' => $faker->date,
        'Heure_debut' => $faker->time,
        'Heure_fin' => $faker->time,
        'type'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'module'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'classe'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'created_at' => now(),
        'updated_at' => now(),

        //
    ];
});
