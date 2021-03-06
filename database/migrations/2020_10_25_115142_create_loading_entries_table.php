<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadingEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loading_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('loading_date');
            $table->string('loading_no');
            $table->integer('consignor')->default(0);
            $table->integer('from_place')->default(0);
            $table->integer('consignee')->default(0);
            $table->integer('to_plce')->default(0);
            $table->integer('vehicle_no')->default(0);
            $table->integer('item_master')->default(0);
            $table->integer('bag')->default(0);
            $table->integer('weight')->default(0);
            $table->double('freight_rate')->default(0);
            $table->double('diesel_advance', 8, 2)->default(0);
            $table->integer('pentrol_pump')->default(0);         
            $table->double('commision_rate')->default(0);
            $table->double('cash_advance')->default(0);
            $table->integer('hemal')->default(0);
            $table->double('hema_rate')->default(0);                     
            $table->integer('createdby')->default(0);
            $table->string('ipaddress')->nullable();
            $table->string('status')->default(0);   
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
        Schema::dropIfExists('loading_entries');
    }
}
