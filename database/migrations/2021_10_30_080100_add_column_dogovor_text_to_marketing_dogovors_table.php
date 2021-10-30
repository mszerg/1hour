<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDogovorTextToMarketingDogovorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketing_dogovors', function (Blueprint $table) {

            $table->text('Dogovor_text');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marketing_dogovors', function (Blueprint $table) {
            //
            $table->dropColumn('Dogovor_text');
        });
    }
}
