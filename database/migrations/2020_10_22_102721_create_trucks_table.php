<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('truck_number');
            $table->integer('truckowner_id');
            $table->integer('tructype_id');            
            $table->string('truck_model')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('chassisno')->nullable();
            $table->string('engineno')->nullable();            
            $table->string('document')->nullable();
            $table->integer('status')->default(0);
            $table->string('ipaddress')->nullable();
            $table->string('createdby')->nullable();
            
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
        Schema::dropIfExists('trucks');
    }
}
