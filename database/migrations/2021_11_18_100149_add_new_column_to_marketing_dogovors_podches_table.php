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
            $table->unsignedBigInteger('marketing_dogovors_id');
            $table->index('marketing_dogovors_id','md_podches_mds_idx');
            $table->foreign('marketing_dogovors_id','md_podches_mds_fk')->on('marketing_dogovors')->references('id');

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
            $table->dropIndex('md_podches_mds_idx');
            $table->dropForeign('md_podches_mds_fk');
            $table->dropColumn('marketing_dogovors_id');
        });
    }
}
