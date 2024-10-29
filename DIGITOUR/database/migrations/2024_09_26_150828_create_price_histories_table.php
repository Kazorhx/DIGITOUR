<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('price_histories', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('precio');
            $table->unsignedBigInteger('producto_id'); // FK a producto
            $table->foreign('producto_id')->references('id')->on('products');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('price_histories');
    }
};
