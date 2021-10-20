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
            $table->bigInteger('TypeMarketing');
            $table->float('Percent');
            $table->float('SumMarketing');
            $table->string('Brand',150);
            $table->tinyInteger('FioManager');
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
        Schema::dropIfExists('marketing_dogovor_podches');
    }
}
