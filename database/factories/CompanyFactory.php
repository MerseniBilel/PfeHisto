<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        
        'companyName' =>$faker->name, 
        'emailContact' =>$faker->unique()->safeEmail, 
        'compnayLocation' =>$faker->address,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
