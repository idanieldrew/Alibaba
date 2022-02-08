<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_Items', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('ticket_id')->constrained();
            $table->foreignId('cart_id')->constrained();
            $table->integer('count');
            $table->float('price')->unique();
            $table->float('total');
            $table->boolean('active');
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
        Schema::dropIfExists('cart_Items');
    }
}
