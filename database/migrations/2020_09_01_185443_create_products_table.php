<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('sku');
            $table->string('image');
            $table->string('bar_code')->nullable(); //codigo de barra
            $table->integer('available_stock'); // stock disponible/
            $table->foreignId('iva_id'); // 0: excento de iva, 1: Incluir iva
            $table->foreignId('category_id'); //categoria de precio
            $table->double('detail_price'); // precio al detal
            $table->double('wholesale_price')->nullable(); // precio al mayor 
            $table->double('big_wholesale_price')->nullable(); // precio al gran mayor//
            $table->integer('amount_min_big_wholesale'); //cantidad minima para vender al precio al gran mayor
            $table->foreignId('packaging_id'); //empaquetado
            $table->string('units_packaging'); // unidades que trae el empaquetado. 
            $table->double('discount');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
