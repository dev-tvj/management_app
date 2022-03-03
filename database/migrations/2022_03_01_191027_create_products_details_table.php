<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->float('lengh', 8, 2);
            $table->float('width', 8, 2);
            $table->float('height', 8, 2);
            $table->timestamps();

            //constraint
            $table->foreign('id_product')->references('id')->on('products');
            $table->unique('id_product'); // Ensures that the product ID is unique, does not allow repetition .
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_details');
    }
}
