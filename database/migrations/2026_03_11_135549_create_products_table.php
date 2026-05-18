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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subcategory_id')->constrained()->cascadeOnDelete();

            // Product info
            $table->string('type')->default('product');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->json('dimensions_cm')->nullable();
            $table->json('dimensions_in')->nullable();
            $table->text('materials_and_finishes')->nullable();

            // Flags
            $table->boolean('visible_in_all_products')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('has_stock')->default(false);
            $table->boolean('is_best_seller')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
