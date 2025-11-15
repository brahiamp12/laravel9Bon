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

            // Primary Key
            $table->bigIncrements('id_product');
            //las siguientes columnas son id_category, type, reference, name, composed, description, cost, price, id_unidad, id_tipo, id_cuenta_ingreso, id_cuenta_inventario, for_sale, stockable, active, id_cuenta_costo, id_cuenta_descuento, for_pos, combo, produccion, create_date, update_date
            $table->unsignedBigInteger('id_category')->default(1);
            $table->string('type', 50);
            $table->string('reference', 100)->unique();
            $table->string('name', 255);
            $table->boolean('composed')->default(false);
            $table->text('description')->nullable();
            $table->decimal('cost', 15, 2)->default(0);
            $table->decimal('price', 15, 2)->default(0);
            $table->unsignedBigInteger('id_unidad')->default(1);
            $table->unsignedBigInteger('id_tipo')->default(1);
            $table->unsignedBigInteger('id_cuenta_ingreso')->default(1);
            $table->unsignedBigInteger('id_cuenta_inventario')->default(1);
            $table->boolean('for_sale')->default(true);
            $table->boolean('stockable')->default(true);
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('id_cuenta_costo')->default(1);
            $table->unsignedBigInteger('id_cuenta_descuento')->default(1);
            $table->boolean('for_pos')->default(false);
            $table->boolean('combo')->default(false);
            $table->boolean('produccion')->default(false);
            

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
