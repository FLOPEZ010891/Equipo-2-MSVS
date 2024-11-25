<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Modificar la columna 'id' para agregar AUTO_INCREMENT
        DB::statement('ALTER TABLE forum_replies MODIFY id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Si necesitas revertir la migración, elimina el AUTO_INCREMENT
        DB::statement('ALTER TABLE forum_replies MODIFY id BIGINT(20) UNSIGNED NOT NULL');
    }
};
