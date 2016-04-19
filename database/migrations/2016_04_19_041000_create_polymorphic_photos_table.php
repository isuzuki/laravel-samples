<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolymorphicPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('price')->unsigned();
        });

        Schema::create('photos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('imageable_id')->unsigned();
            $table->string('imageable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff');
        Schema::drop('orders');
        Schema::drop('photos');
    }
}
