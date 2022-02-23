<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingDogovorPodchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing_dogovor_podches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketing_types_id');
            $table->float('price');
            $table->unsignedTinyInteger('managers_id');
            $table->string('Comment')->nullable();
            $table->unsignedBigInteger('marketing_dogovors_id');
            $table->timestamps();

            $table->index('marketing_dogovors_id','md_podches_mds_idx');
            $table->foreign('marketing_dogovors_id','md_podches_mds_fk')->on('marketing_dogovors')->references('id');

            $table->index('marketing_types_id','md_podches_marketing_types_idx');
            $table->foreign('marketing_types_id','md_podches_marketing_types_fk')->on('marketing_types')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketing_dogovor_podches');
    }
}
