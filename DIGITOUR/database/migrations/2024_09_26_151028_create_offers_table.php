<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 50);
            $table->date('fecha_inicio');
            $table->date('fecha_vencimiento');
            $table->integer('tiempo_enfriamiento');
            $table->integer('cantidad_voucher')->nullable(); // No requerido
            $table->unsignedBigInteger('tipo_oferta_id'); // FK a tipo_oferta
            $table->foreign('tipo_oferta_id')->references('id')->on('offer_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
