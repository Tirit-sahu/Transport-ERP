<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('consignor_name');
            $table->integer('place_id');
            $table->integer('state_id')->default(0);
            $table->string('consignor_mobile')->nullable();
            $table->string('consignor_email')->nullable();
            $table->string('consignor_address')->nullable();
            $table->string('consignor_gst_no')->nullable();
            $table->string('company_commission')->nullable();
            $table->string('document')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('consignors');
    }
}
