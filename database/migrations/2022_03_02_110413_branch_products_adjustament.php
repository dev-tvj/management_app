<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchProductsAdjustament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function(Blueprint $table) {
            $table->id();
            $table->string('branch', 30);
            $table->timestamps();
        });

        Schema::create('branch_products', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_branch');
            $table->unsignedBigInteger('id_product');
            $table->decimal('sale_price', 8, 2);
            $table->integer('max_inventory');
            $table->integer('min_inventory');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_branch')->references('id')->on('branches');
            $table->foreign('id_product')->references('id')->on('products');

        });


        // Removing the columns above from Products table.
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn(['sale_price', 'max_inventory', 'min_inventory']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Removing the columns above from Products table.
        Schema::table('products', function(Blueprint $table) {
            $table->decimal('sale_price', 8, 2);
            $table->integer('max_inventory');
            $table->integer('min_inventory');
        });

        Schema::dropIfExists('branch_products');
        Schema::dropIfExists('branches');
    }

}
