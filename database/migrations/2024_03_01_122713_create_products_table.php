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
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('image_id');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('slug')->unique();
            $table->unsignedTinyInteger('rating');
            $table->string('cost_price');
            $table->string('quantity_sold')->nullable();
            $table->string('stock');
            $table->foreignId('child_caterory_id')->constrained();
            $table->foreign('store_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('files')->onDelete('cascade');
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
