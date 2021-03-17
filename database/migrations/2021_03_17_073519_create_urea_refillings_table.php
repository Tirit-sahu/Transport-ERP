<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUreaRefillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urea_refillings', function (Blueprint $table) {
            $table->id();
            $table->integer('truckNumber');
            $table->integer('driverName');
            $table->string('place')->nullable();
            $table->string('meterReading')->nullable();
            $table->date('date')->nullable();
            $table->double('liter', 8,2);
            $table->double('amount', 8,2);
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
        Schema::dropIfExists('urea_refillings');
    }
}
