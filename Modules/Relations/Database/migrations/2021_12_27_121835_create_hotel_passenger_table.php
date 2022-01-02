<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_passenger', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('postal_code_hotel');
            $table->unsignedBigInteger('user_id');

            $table->foreign('postal_code_hotel')->references('postal_code')->on('hotels');
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
        Schema::dropIfExists('hotel_user');
    }
}
