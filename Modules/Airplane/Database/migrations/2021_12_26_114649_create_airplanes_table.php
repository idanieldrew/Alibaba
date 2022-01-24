<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplanes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('details');
            $table->unsignedBigInteger('code')->unique();
            $table->boolean('floor');
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
        Schema::dropIfExists('airplanes');
    }
}
