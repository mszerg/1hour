<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketing_dogovors_podches_id');
            $table->date('DateInvoice');
            $table->float('CalculationBase')->nullable();
            $table->float('Price')->nullable();
            $table->float('SumItogo')->nullable();
            $table->string('Comment')->nullable();
            $table->unsignedTinyInteger('managers_id');
            $table->unsignedBigInteger('import_bank_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invoice');
    }
}
