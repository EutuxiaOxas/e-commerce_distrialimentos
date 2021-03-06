<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('address');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->foreignId('township_id');
            $table->string('postal_code');
            $table->string('responsable');
            $table->string('responsable_phone')->nullable();
            $table->foreignId('delivery_route_id'); //Ruta de entrega
            $table->string('type');
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
        Schema::dropIfExists('addresses');
    }
}
