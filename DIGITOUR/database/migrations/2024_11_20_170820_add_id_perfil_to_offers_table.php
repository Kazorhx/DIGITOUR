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
        Schema::table('offers', function (Blueprint $table) {
            // Agregar la columna id_perfil
            $table->unsignedBigInteger('id_perfil')->after('id')->nullable();

            // Crear la clave foránea que referencia a la tabla profiles
            $table->foreign('id_perfil')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            // Eliminar la clave foránea
            $table->dropForeign(['id_perfil']);

            // Eliminar la columna id_perfil
            $table->dropColumn('id_perfil');
        });
    }
};
