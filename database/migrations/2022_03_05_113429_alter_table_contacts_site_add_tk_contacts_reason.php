<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableContactsSiteAddTkContactsReason extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts_site', function (Blueprint $table) {
            $table->unsignedBigInteger('contacts_reason_id');
        });

        DB::statement('update contacts_site set contacts_reason_id = contact_reason');

        Schema::table('contacts_site', function (Blueprint $table) {
            $table->foreign('contacts_reason_id')->references('id')->on('contact_reasons');
            $table->dropColumn('contact_reason');
        });
    
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts_site', function (Blueprint $table) {
            $table->integer('contact_reasons');
            $table->DropForeign('contacts_site_contacts_reason_id_foreign');
        });

        DB::statement('update contacts_site set contact_reason = contacts_reason_id');
        
        Schema::table('contacts_site', function (Blueprint $table) {
            $table->dropColumn('contacts_reason_id');
        });
    }
}
