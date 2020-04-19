<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 10)->create();
    }
}
