<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirplanePassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplane_passenger', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('airplane_id');
            $table->unsignedBigInteger('passenger_id');

            $table->foreign('airplane_id')->references('code')->on('airplanes');
            $table->foreign('passenger_id')->references('identification_code')->on('passengers');

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
        Schema::dropIfExists('airplane_user');
    }
}
