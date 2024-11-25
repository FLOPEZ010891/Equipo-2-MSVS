<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('direccion')->nullable();
            $table->integer('edad')->nullable();
            $table->string('sexo')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('imagen')->nullable();
            
            // Verificar la existencia de las columnas de marca de tiempo
            if (!Schema::hasColumn('users', 'created_at') && !Schema::hasColumn('users', 'updated_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('direccion');
            $table->dropColumn('edad');
            $table->dropColumn('sexo');
            $table->dropColumn('ocupacion');
            $table->dropColumn('telefono');
            $table->dropColumn('imagen');
            
            // Verificar la existencia de las columnas de marca de tiempo
            if (Schema::hasColumn('users', 'created_at') && Schema::hasColumn('users', 'updated_at')) {
                $table->dropTimestamps();
            }
        });
    }
}
