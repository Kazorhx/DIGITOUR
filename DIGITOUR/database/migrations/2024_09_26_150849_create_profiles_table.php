<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_creacion');
            $table->string('tema', 50)->nullable(); // No requerido
            $table->string('descripcion', 50);
            $table->string('redes_sociales', 50);
            $table->string('datos_contacto', 255);
            $table->string('url_geolocalizacion', 255);
            $table->unsignedBigInteger('tipo_perfil_id'); // FK a tipo_perfil
            $table->foreign('tipo_perfil_id')->references('id')->on('categories');
            $table->unsignedBigInteger('usuario_id'); // FK a usuario
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
