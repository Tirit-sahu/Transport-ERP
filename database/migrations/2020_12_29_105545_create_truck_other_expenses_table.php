<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckOtherExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_other_expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle');
            $table->integer('driver');
            $table->text('expensesDate');
            $table->integer('HEAD');
            $table->double('AMT');
            $table->text('narration');
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
        Schema::dropIfExists('truck_other_expenses');
    }
}
