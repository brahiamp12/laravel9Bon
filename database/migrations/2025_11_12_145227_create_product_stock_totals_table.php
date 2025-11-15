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
        Schema::create('product_stock_totals', function (Blueprint $table) {
            // primary key
            $table->id();
            // Las siguientes columnas id_product, id_shop, stock, update_date, costo
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_shop');
            $table->integer('stock')->default(0);
            $table->decimal('costo', 15, 2)->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stock_totals');
    }
};
