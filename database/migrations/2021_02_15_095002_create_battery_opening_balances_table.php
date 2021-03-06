<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatteryOpeningBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battery_opening_balances', function (Blueprint $table) {
            $table->id();
            $table->string('battery1Name');
            $table->string('battery1SerialNo');
            $table->string('battery1Images');
            $table->string('battery2Name');
            $table->string('battery2SerialNo');
            $table->string('battery2Images');
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
        Schema::dropIfExists('battery_opening_balances');
    }
}
