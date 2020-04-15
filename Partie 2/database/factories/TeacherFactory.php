<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use App\Classe;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [

        'id_class' => Classe::get('id')->random(),

        'first_name'=>$faker->firstNameFemale,
        'last_name'=>$faker->lastName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone_teacher'=>$faker->e164PhoneNumber,
       
        'email'=>$faker->email,
        'picture_teacher' => 'http://lorempixel.com/640/480/people/'.$faker->randomDigitNotNull,
        'created_at' => now(),
       'updated_at' => now(),

        //
    ];
});
