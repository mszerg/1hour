<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingDogovorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing_dogovors', function (Blueprint $table) {
            $table->id();
            $table->string('NumDogovor',100);
            $table->string('OKPO_post',100);
            $table->string('Name_post');
            $table->date('DB_dogovor');
            $table->date('DE_dogovor');
            $table->boolean('Active');
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
        Schema::dropIfExists('marketing_dogovors');
    }
}
