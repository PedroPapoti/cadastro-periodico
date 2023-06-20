<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('periodicos', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome');
            $table->string('editora');
            $table->decimal('valor_assinatura', 8, 2);
            $table->enum('area_conhecimento', ['Opção 1', 'Opção 2', 'Opção 3', 'Opção 4']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodicos');
    }
};
