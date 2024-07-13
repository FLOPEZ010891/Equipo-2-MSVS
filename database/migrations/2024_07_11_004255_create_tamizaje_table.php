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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->date('fecha');
            $table->integer('pregunta_1')->nullable();
            $table->integer('pregunta_2')->nullable();
            $table->integer('pregunta_3')->nullable();
            $table->integer('pregunta_4')->nullable();
            $table->integer('pregunta_5')->nullable();
            $table->integer('pregunta_6')->nullable();
            $table->integer('pregunta_7')->nullable();
            $table->integer('pregunta_8')->nullable();
            $table->integer('pregunta_9')->nullable();
            $table->integer('pregunta_10')->nullable();
            $table->integer('pregunta_11')->nullable();
            $table->integer('pregunta_12')->nullable();
            $table->integer('pregunta_13')->nullable();
            $table->integer('pregunta_14')->nullable();
            $table->integer('pregunta_15')->nullable();
            $table->integer('pregunta_16')->nullable();
            $table->integer('pregunta_17')->nullable();
            $table->integer('pregunta_18')->nullable();
            $table->integer('pregunta_19')->nullable();
            $table->integer('pregunta_20')->nullable();
            $table->integer('puntaje')->nullable();
            $table->timestamps();

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


