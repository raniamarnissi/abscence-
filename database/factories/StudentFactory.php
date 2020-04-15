<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use App\Classe;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'id_class' => Classe::get('id')->random(),
        'first_name'=>$faker->firstNameFemale,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'last_name'=>$faker->lastName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'cin'=>$faker->ean8,
        'date_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'adress_stud'=>$faker->address,
        'phone_stud'=>$faker->e164PhoneNumber,
        'picture_stud' => 'http://lorempixel.com/640/480/people/'.$faker->randomDigitNotNull,
        'created_at' => now(),
        'updated_at' => now(),
        'remember_token' => Str::random(10),
        //
    ];
});
