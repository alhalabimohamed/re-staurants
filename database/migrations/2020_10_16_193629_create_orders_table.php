<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerID')->nullable();
            $table->string('OrderDate');
            $table->string('RequiredDate');
            $table->string('ShippedDate')->nullable();
            $table->string('Status');
            $table->string('Comments' , 255)->nullable();
           // $table->foreign('CustomerID')->references('id')->on('customers');
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
        Schema::dropIfExists('orders');
    }
}
