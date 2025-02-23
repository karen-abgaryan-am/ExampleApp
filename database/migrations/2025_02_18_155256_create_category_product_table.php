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
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('category_id', 'category_id_foreign')->references('id')->on('categories');
            $table->foreign('product_id', 'product_id_foreign')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_product', function (Blueprint $table) {
            $table->dropForeign('category_id_foreign');
            $table->dropForeign('product_id_foreign');
        });
        Schema::dropIfExists('category_product');
    }
};
