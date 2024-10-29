<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->unsignedBigInteger('provincia_id');  // FK a provincia
            $table->foreign('provincia_id')->references('id')->on('provinces');   // Relaciones de FK
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('communes');
    }
};
