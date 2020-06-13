<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absense;
use App\User;
use App\Modul;
use Faker\Generator as Faker;

$factory->define(Absense::class, function (Faker $faker) {
    return [
  
      
          
        'commentaire'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
       'user_id' => User::get('id')->random(),
      

       'Nom_module'=> $faker->name,
       

        'created_at' => now(),
        'updated_at' => now(),

        'date_absence'=> $faker->date,
       
        //
    ];
});
