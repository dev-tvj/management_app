<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function(Blueprint $table) {
            $table->id();
            $table->string('unit', 5); // cm, mm, kg, etc.
            $table->string('description', 30);
            $table->timestamps();

        });

        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger('id_unit');
            $table->foreign('id_unit')->references('id')->on('units');
        });

        Schema::table('products_details', function(Blueprint $table) {
            $table->unsignedBigInteger('id_unit');
            $table->foreign('id_unit')->references('id')->on('units');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_id_unit_foreign');
            $table->dropColumn('id_unit');
        });

        Schema::table('products_details', function(Blueprint $table) {
            $table->dropForeign('products_details_id_unit_foreign');
            $table->dropColumn('id_unit');
        });

        Schema::dropIfExists('units');
    
    }
}