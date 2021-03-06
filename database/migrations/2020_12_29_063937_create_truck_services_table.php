<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_services', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle');
            $table->integer('driver');
            $table->text('serviceDate');
            $table->text('serviceNumber');
            $table->text('meterReading');
            $table->text('narration');
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
        Schema::dropIfExists('truck_services');
    }
}
