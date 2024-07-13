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
            $table->string('name');
$table->text('description')->nullable();
$table->decimal('price', 8, 2);
$table->string('image')->nullable();
$table->unsignedBigInteger('category_id');  // For category
$table->unsignedBigInteger('subcategory_id');  // For subcategory

// Optionally, add foreign keys if you have categories and subcategories tables
$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
$table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');

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