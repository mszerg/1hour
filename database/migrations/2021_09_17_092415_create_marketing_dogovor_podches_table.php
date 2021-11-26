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
            $table->float('Percent')->nullable();
            $table->float('SumMarketing')->nullable();;
            $table->string('Brand',150)->nullable();;
            $table->tinyInteger('FioManager');
            $table->timestamps();

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
