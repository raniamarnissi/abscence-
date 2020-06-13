<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modul;
use Faker\Generator as Faker;

$factory->define(Modul::class, function (Faker $faker) {
    return [
      
        'modul' => $faker->name,
        'created_at' => now(),
         'updated_at' => now(),


        //
    ];
});
