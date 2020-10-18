<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('salesRepEmployeeNum')->nullable();
            $table->string('Name');
            $table->string('LastName' , 255);
            $table->string('FirstName',255);
            $table->string('Phone',255);
            $table->string('Addewss1',255);
            $table->string('Addewss2',255);
            $table->string('City',255);
            $table->string('State',255);
            $table->integer('PostalCode')->nullable();
            $table->string('Country',255);
            $table->decimal('CreditLimit' , 19);
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
