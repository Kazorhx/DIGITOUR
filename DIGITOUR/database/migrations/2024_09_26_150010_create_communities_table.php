<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('localidad', 50)->nullable(); // No requerida
            $table->unsignedBigInteger('comuna_id');  // FK a comuna
            // Relaciones de clave foránea
            $table->foreign('comuna_id')->references('id')->on('communes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
