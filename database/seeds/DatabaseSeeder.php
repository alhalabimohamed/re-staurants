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
         $this->call(CustomersSeedr::class);
         $this->call(EmployeeSeedr::class);
         $this->call(Officeseeder::class);
         $this->call(OrderProductSeeder::class);
         $this->call(OrdersSeeder::class);
         $this->call(ProductlinesSeeder::class);
         $this->call(PaymentsSeeder::class);
         $this->call(ProductsSeeder::class);
    }
}
