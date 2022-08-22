<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('name');
            $table->string('price');
            $table->date('email');
            $table->string('phone');
            $table->string('gst');
            $table->string('payment_info');
            $table->string('pan');
            $table->string('aadhaar');
            $table->string('file_url');
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
        Schema::dropIfExists('customers');
    }
}
