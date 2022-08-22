<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('name');
            $table->string('aadhaar');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('file_url');
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
        Schema::dropIfExists('worker');
    }
}
