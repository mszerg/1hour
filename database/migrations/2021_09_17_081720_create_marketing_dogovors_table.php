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
            $table->string('NumDogovor',100)->nullable();;
            $table->string('Name_post');
            $table->date('DB_dogovor');
            $table->date('DE_dogovor')->nullable();
            $table->boolean('AutoRenewal')->nullable(); //автопролонгация договора
            $table->integer('Delay')->nullable(); //отстрочка платежа
            $table->text('Dogovor_text')->nullable();
            $table->string('Scancopy')->nullable();
            $table->boolean('Active')->nullable();
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
