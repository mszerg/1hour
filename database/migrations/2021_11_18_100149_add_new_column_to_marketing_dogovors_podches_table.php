<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToMarketingDogovorsPodchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketing_dogovor_podches', function (Blueprint $table) {
            //
            $table->bigInteger('id_marketing_dogovors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marketing_dogovor_podches', function (Blueprint $table) {
            //
            $table->dropColumn('id_marketing_dogovors');
        });
    }
}
