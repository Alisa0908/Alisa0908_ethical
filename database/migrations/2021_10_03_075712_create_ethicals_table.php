<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->integer('price');
            $table->text('image_url');
            $table->text('goods_url');
            $table->integer('category_id');
            $table->text('materials');
            $table->text('logistics');
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
        Schema::dropIfExists('ethicals');
    }
}
