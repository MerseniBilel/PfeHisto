<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pfe;
use App\Student;
use App\Teacher;
use App\Company;

use Faker\Generator as Faker;

$factory->define(Pfe::class, function (Faker $faker) {
    return [
        
        'student_id' => Student::get('id')->random(),
        'teacher_id' => Teacher::get('id')->random(),
        'company_id' => Company::get('id')->random(),
        'rate' => $faker->numberBetween(0,10),
        
        'created_at' => now(),
        'updated_at' => now()
    ];
});
