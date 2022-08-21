<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filling', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('order_no');
            $table->string('gms_issued');
            $table->date('date');
            $table->string('weight');
            $table->string('unique_id');
            $table->bigInteger('worker_id');
            $table->string('karat');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('filling');
    }
}
