<?php

use Illuminate\Database\Seeder;

class Officeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Office::class,12)->create();
    }
}
