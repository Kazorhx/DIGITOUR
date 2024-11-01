<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('correo', 50)->unique();
            $table->string('password', 50);
            $table->string('apellido', 50);
            $table->char('genero', 1);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 10);
            $table->string('direccion', 50);
            $table->unsignedBigInteger('rol_id');  // FK a rol
            $table->unsignedBigInteger('estado_usuario_id');  // FK a estado usuario
            $table->foreign('rol_id')->references('id')->on('roles');  // Relaciones de clave foránea
            $table->foreign('estado_usuario_id')->references('id')->on('user_statuses');  // Relaciones de clave foránea
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
