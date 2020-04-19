<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teacher::class, 100)->create();
    }
}
