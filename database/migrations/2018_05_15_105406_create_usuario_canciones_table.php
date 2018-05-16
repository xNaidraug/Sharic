<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_canciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('usuario_canciones');
    }
}
