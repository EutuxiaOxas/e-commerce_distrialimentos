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
            $table->double('unit_price');
            $table->integer('amount');
            $table->integer('iva');
            $table->string('sku');
            $table->string('unit');
            $table->string('packed');
            $table->double('packaging_price');
            $table->double('available_stock');
            $table->double('discount');
            $table->integer('in_stock');
            $table->integer('out_stock');
            $table->string('image');
            $table->foreignId('category_id');
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
