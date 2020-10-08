<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiping_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_id');
            $table->foreignId('user_id');
            $table->string('documento_de_identidad');
            $table->text('direccion_1');
            $table->text('direccion_2');
            $table->string('codigo_postal');
            $table->string('telefono');
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
        Schema::dropIfExists('shiping_data');
    }
}
