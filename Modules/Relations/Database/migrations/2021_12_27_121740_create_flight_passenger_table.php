<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_passenger', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('flight');
            $table->unsignedBigInteger('user_id');

            $table->foreign('flight')->references('flight_number')->on('flights');
            $table->foreign('user_id')->references('identification_code')->on('passengers');
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
        Schema::dropIfExists('flight_user');
    }
}
