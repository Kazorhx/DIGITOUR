<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // PK autoincrementable
            $table->string('nombre', 50);
            $table->string('descripcion', 50);
            $table->integer('codigo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
