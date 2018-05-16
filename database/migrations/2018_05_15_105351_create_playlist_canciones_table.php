<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistCancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_canciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_playlist');
            $table->foreign('id_playlist')->references('id')->on('playlist');
            $table->string('id_canciones');
            $table->foreign('id_canciones')->references('id')->on('canciones');
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
        Schema::dropIfExists('playlist_canciones');
    }
}
