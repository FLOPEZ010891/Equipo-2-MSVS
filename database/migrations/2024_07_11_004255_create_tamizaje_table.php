<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamizaje', function (Blueprint $table) {

            $table->IdTamizaje();
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->datetime('FechaAudit')>nullable();
            $table->integer('PuntajeAudit')->nullable();
            $table->datetime('FechaPosit')>nullable();
            $table->integer('PuntajePosit')->nullable();
            $table->datetime('FechaDesesperanza')>nullable();
            $table->integer('PuntajeDesesperanza')->nullable();
            $table->datetime('FechaAnsiedad')>nullable();
            $table->integer('PuntajeAnsiedad')->nullable();
            $table->datetime('FechaDepresion')>nullable();
            $table->integer('PuntajeDepresion')->nullable();
            $table->datetime('FechaFargestrom')>nullable();
            $table->integer('PuntajeFargestrom')->nullable();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamizaje');
    }
}


