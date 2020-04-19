<?php

use Illuminate\Database\Seeder;
use App\Pfe;

class PfesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pfe::class, 100)->create();
    }
}
