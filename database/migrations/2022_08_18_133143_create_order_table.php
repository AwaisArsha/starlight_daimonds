<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('client_name');
            $table->string('product_name');
            $table->date('date');
            $table->string('size');
            $table->string('unique_id');
            $table->string('purity');
            $table->string('metal_color');
            $table->string('gross_weight');
            $table->string('gr_approx');
            $table->boolean('status')->default(0);
            $table->string('comments');
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
        Schema::dropIfExists('order');
    }
}
