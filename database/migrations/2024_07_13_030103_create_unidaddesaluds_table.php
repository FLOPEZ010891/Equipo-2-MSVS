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
        Schema::create('unidaddesalud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUnidad');
            $table->string('Nombre');
            $table->string('Ubicación');
            $table->string('Especialidades');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('horarioAtencion');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidaddesalud');
    }
};
