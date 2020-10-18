<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('ProductlineID')->nullable();
            $table->integer('Code')->nullable();
            $table->string('Scale')->nullable();
            $table->string('Vendor' ,255)->nullable();
            $table->string('PdtDescrption' ,255)->nullable();
            $table->integer('BuyPrice')->nullable();
            $table->string('MSRP' , 255)->nullable();
            //$table->foreign('ProductlineID')->references('Code')->on('productlines');
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
        Schema::dropIfExists('products');
    }
}
