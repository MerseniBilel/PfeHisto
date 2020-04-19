<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        
        'name' =>$faker->name, 
        'lastname' =>$faker->sentence,
        'email' =>$faker->unique()->safeEmail, 
        'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'location' =>$faker->address,
        'phoneNumber' =>$faker->e164PhoneNumber,

        'created_at' => now(),
        'updated_at' => now(),
    ];
});
