<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscographyMusicTable extends Migration
{
    /**
     * @var string
     */
    protected $tableName = 'discography_music';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function(Blueprint $table) {
            $table->integer('discography_id')->unsigned();
            $table->integer('music_id')->unsigned();
            $table->integer('track_no')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }
}
