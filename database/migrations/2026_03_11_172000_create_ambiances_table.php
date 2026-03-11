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
        // 1. Tabela de Ambientes (Ambiances)
        Schema::create('ambiances', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });

        // 2. Tabela Pivot (Relacionamento com Produtos + Coordenadas)
        Schema::create('ambiance_product', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ambiance_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();

            // Colunas extras na pivot table para guardar a posição do hotspot!
            $table->string('top');  // Ex: '45%'
            $table->string('left'); // Ex: '60%'

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambiance_product');
        Schema::dropIfExists('ambiances');
    }
};
