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
        Schema::create('product_stock', function (Blueprint $table) {
            // primary key
            $table->id();
            // las siguientes columnas son id_product, id_shop, id_product_sale, id_employee, cost, quantity, stock_type, create_date, update_date, stock_after
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_shop');
            $table->unsignedBigInteger('id_product_sale')->nullable();
            $table->unsignedBigInteger('id_employee');
            $table->decimal('cost', 15, 2)->default(0);
            $table->integer('quantity')->default(0);
            $table->string('stock_type', 50);
            $table->decimal('stock_after', 15, 2)->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stocks');
    }
};
