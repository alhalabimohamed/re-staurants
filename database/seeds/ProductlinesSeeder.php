<?php

use Illuminate\Database\Seeder;

class ProductlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Productline::class,12)->create();
    }
}
