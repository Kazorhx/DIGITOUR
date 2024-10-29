<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->unsignedBigInteger('region_id');  // FK a region
            $table->foreign('region_id')->references('id')->on('regions');    // Relaciones de FK
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
