<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyreOpeningBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tyre_opening_balances', function (Blueprint $table) {
            $table->id();
            $table->integer('truck_number');
            $table->integer('tyre_type');
            $table->text('serial_number');
            $table->string('name');
            $table->text('meter_reading');
            $table->date('upload_date');
            $table->text('images');
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
        Schema::dropIfExists('tyre_opening_balances');
    }
}
