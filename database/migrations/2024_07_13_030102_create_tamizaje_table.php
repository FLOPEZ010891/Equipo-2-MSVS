<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tamizaje', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->timestamp('FechaAudit')->nullable();
            $table->integer('PuntajeAudit')->nullable();
            $table->timestamp('FechaPosit')->nullable();
            $table->integer('PuntajePosit')->nullable();
            $table->timestamp('FechaDesesperanza')->nullable();
            $table->integer('PuntajeDesesperanza')->nullable();
            $table->timestamp('FechaAnsiedad')->nullable();
            $table->integer('PuntajeAnsiedad')->nullable();
            $table->timestamp('FechaDepresion')->nullable();
            $table->integer('PuntajeDepresion')->nullable();
            $table->timestamp('FechaFargestrom')->nullable();
            $table->integer('PuntajeFargestrom')->nullable();
            $table->timestamps();

           $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamizaje');
    }
};
