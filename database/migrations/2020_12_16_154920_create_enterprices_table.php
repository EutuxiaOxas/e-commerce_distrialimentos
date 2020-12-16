<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('RIF');
            $table->string('SADA');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->string('legal_address');
            $table->string('shipping_address');
            $table->string('hours_of_operation');
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
        Schema::dropIfExists('enterprices');
    }
}
