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
        Schema::create('finishes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('visible')->default(true);
            $table->timestamps();
        });

        // 2. Tabela Pivot (Relacionamento Muitos-para-Muitos)
        // O Laravel exige a ordem alfabética no nome: f vem antes de p (finish_product)
        Schema::create('finish_product', function (Blueprint $table) {
            $table->id();

            $table->foreignId('finish_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finish_product');
        Schema::dropIfExists('finishes');
    }
};
