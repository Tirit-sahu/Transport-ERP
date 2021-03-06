<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyreMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tyre_mappings', function (Blueprint $table) {
            $table->id();
            $table->integer('godown');
            $table->integer('truck_number');
            $table->integer('tyre_type');
            $table->string('Serial_number');
            $table->text('meter_reading')->nullable();
            $table->date('upload_date');
            $table->string('images');
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
        Schema::dropIfExists('tyre_mappings');
    }
}
