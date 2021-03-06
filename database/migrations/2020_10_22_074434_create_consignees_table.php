<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignees', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('consignee_name');
            $table->integer('place_id');
            $table->integer('state_id');
            $table->string('consignee_mobile')->nullable();
            $table->string('consignee_email')->nullable();
            $table->string('consignee_address')->nullable();
            $table->string('consignee_gst_no')->nullable();
            $table->string('document')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('consignees');
    }
}
