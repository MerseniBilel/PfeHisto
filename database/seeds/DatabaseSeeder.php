<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(CompanysSeeder::class);
        $this->call(PfesSeeder::class);
        
        
       

    }
}
