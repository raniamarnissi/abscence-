<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modul;
use Faker\Generator as Faker;

$factory->define(Modul::class, function (Faker $faker) {
    return [
        'semester'=> $faker->randomDigitNotNull,
        'created_at' => now(),
         'updated_at' => now(),


        //
    ];
});
