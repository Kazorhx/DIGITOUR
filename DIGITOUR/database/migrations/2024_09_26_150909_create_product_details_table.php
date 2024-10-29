<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('disponible');
            $table->unsignedBigInteger('perfil_id'); // FK a perfil
            $table->foreign('perfil_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('producto_id'); // FK a producto
            $table->foreign('producto_id')->references('id')->on('products');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
