<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('voucher_statuses', function (Blueprint $table) {
            $table->id();
            $table->char('descripcion', 1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voucher_statuses');
    }
};
