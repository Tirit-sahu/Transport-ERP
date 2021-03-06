<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWheelGreasingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheel_greasings', function (Blueprint $table) {
            $table->id();
            $table->integer('truckNumber')->nullable();
            $table->integer('driverName')->nullable();
            $table->string('place')->nullable();
            $table->string('meterReading')->nullable();
            $table->date('date')->nullable();
            $table->string('nextGreasingKM')->nullable();
            $table->string('extraMaterial')->nullable();
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('wheel_greasings');
    }
}
