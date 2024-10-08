<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact number')->nullable();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->string('products')->nullable();
            $table->string('payment method')->nullable();
            $table->string('cost')->nullable();
            $table->string('address')->nullable();
            $table->string('shipping status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
