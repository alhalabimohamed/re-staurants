<?php

use Illuminate\Database\Seeder;

class EmployeeSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for ($i=0; $i<50; $i++){
            //\Illuminate\Support\Facades\DB::table('Customers')->insert([
            //                'Name' => 'customers' .$i,
            //                'LastName' => 'customers' .$i
            //            ]);
            factory(\App\Employee::class,12)->create();

    }
}
