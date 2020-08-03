<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillSaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_save', function (Blueprint $table) {
            $table->increments('id_bill');
            $table->decimal('balance',12,4);
            $table->text('note');
            $table->time('timeBill');
            $table->integer('id_save')->unsigned();
            $table->foreign('id_save')->references('id_save')->on('save');
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
        Schema::dropIfExists('bill_save');
    }
}
