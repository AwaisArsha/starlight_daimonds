<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('order_no');
            $table->string('gms_issued');
            $table->date('date');
            $table->string('weight');
            $table->string('unique_id');
            $table->bigInteger('worker_id');
            $table->string('w_karat');
            $table->string('w_piece');
            $table->string('dd_karat');
            $table->string('dd_karat_CS');
            $table->string('dd_karat_AD');
            $table->string('dd_piece_CS');
            $table->string('dd_piece_AD');
            $table->string('dust');
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
        Schema::dropIfExists('setting');
    }
}
