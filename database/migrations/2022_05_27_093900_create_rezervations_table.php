<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('product_id')->nullable();//transfer_id//vehicle
            $table->string('from_location_id')->nullable();
            $table->string('to_location_id')->nullable();
            $table->float('price')->nullable();
            $table->string('Airline')->nullable();
            $table->string('flightnumber')->nullable();
            $table->date('flightdate')->nullable();
            $table->time('flightime', $precision = 0)->nullable();
            $table->time('pickuptime', $precision = 0)->nullable();
            $table->string('note',500)->nullable();
            $table->string('ip',50)->nullable();
            $table->string('status',10)->nullable()->default('New');
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
        Schema::dropIfExists('rezervations');
    }
};
