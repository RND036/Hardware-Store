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
            $table->string('product')->nullable();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('stocks')->nullable();
            $table->decimal('buying price', 8, 2)->nullable();
            $table->decimal('selling price', 8, 2)->nullable();
            $table->decimal('profit', 8, 2)->nullable();
            $table->foreignId('supplier_id')->constrained()->onDelete('cascade');
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
