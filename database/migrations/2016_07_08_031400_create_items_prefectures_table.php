<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPrefecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_prefecture', function(Blueprint $table)
        {
            $table->integer('item_id')->unsigned();
            $table->integer('prefecture_id')->unsigned();
            $table->string('title');

            $table->primary(['item_id', 'prefecture_id']);

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onCascade('delete');

            $table->foreign('prefecture_id')
                ->references('id')
                ->on('prefectures')
                ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items_prefectures');
    }
}
