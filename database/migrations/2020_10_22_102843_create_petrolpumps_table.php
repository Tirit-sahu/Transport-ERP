<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetrolpumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petrolpumps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('petrol_pump_name');
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->integer('state_id')->default(0);
            $table->string('mobile')->nullable();
            $table->string('alter_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('contact_person_email')->nullable();
            
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
        Schema::dropIfExists('petrolpumps');
    }
}
