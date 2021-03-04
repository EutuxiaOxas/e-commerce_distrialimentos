<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('monto');
            $table->foreignId('order_id');
            $table->date('fecha')->nullable();
            $table->foreignId('id_banco_receptor');
            $table->text('referencia')->nullable();
            $table->string('titular_cuenta')->nullable();
            $table->string('documento_identidad_titular')->nullable();
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
        Schema::dropIfExists('pagos');
    }
}
