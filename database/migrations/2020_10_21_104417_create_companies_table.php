<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_logo')->nullable();
            $table->string('company_owner_name');
            $table->string('company_name');
            $table->string('company_head_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_mobile2')->nullable();
            $table->string('head_office_address')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_pan_card')->nullable();
            $table->string('company_gst_no')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('company_Loading_prefix')->nullable();
            $table->string('ipaddress')->nullable();
            $table->integer('createdby');
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
        Schema::dropIfExists('companies');
    }
}
