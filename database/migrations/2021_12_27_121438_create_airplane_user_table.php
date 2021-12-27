<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirplaneUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplane_user', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('airplane_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('airplane_id')->references('code')->on('airplanes');
            $table->foreign('user_id')->references('identification_code')->on('users');

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
