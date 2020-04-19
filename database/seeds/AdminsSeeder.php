<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 1)->create();
    }
}
