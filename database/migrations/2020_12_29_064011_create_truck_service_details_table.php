<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_service_details', function (Blueprint $table) {
            $table->id();
            $table->integer('serviceType');
            $table->text('expiryDate');
            $table->double('AMT', 8, 2);
            $table->string('remark');
            $table->integer('truckServiceId');
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
        Schema::dropIfExists('truck_service_details');
    }
}
