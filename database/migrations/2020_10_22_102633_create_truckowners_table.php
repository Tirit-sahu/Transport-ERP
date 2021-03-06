<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truckowners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('address')->nullable();
            $table->string('owner_type')->nullable();
            $table->string('gst_no')->nullable();
            $table->integer('state_code')->default(0);
            $table->string('ac_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('ifsc_code')->nullable();

            $table->string('alter_ac_no')->nullable();
            $table->string('alter_bank_name')->nullable();
            $table->string('alter_branch_name')->nullable();
            $table->string('alter_ifsc_code')->nullable();

            $table->string('document')->nullable();
            $table->string('upload_pan_card')->nullable();
            $table->string('upload_aadhar_card')->nullable();
            $table->string('tds_status')->nullable();

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
        Schema::dropIfExists('truckowners');
    }
}
