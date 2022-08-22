<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('name');
            $table->string('product');
            $table->date('date');
            $table->string('no_product');
            $table->string('dod');
            $table->string('size');
            $table->string('setting');
            $table->string('gold_weight');
            $table->string('metal_karat');
            $table->string('metal_color');
            $table->string('polish_type');
            $table->string('party_sample_des');
            $table->string('description');
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
        Schema::dropIfExists('products');
    }
}
