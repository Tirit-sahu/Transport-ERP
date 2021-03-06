<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRackHandlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rack_handlings', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle');
            $table->integer('bag');
            $table->double('rate', 8, 2);
            $table->double('comm_amt', 8, 2);
            $table->string('gate_pass_number');
            $table->double('payment_amt', 8, 2);
            $table->text('payment_date');
            $table->string('_token');
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
        Schema::dropIfExists('rack_handlings');
    }
}
