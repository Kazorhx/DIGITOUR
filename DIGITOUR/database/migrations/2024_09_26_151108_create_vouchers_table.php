<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {

            $table->string('id', 50)->primary();
            $table->date('fecha_emision');
            $table->date('fecha_validacion')->nullable(); // No requerido
            $table->string('url', 255);
            $table->string('rut', 50);
            $table->string('nombre_cliente', 50);
            $table->unsignedBigInteger('oferta_id'); // FK a oferta
            $table->foreign('oferta_id')->references('id')->on('offers');
            $table->unsignedBigInteger('estado_voucher_id'); // FK a estado_voucher
            $table->foreign('estado_voucher_id')->references('id')->on('voucher_statuses');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
