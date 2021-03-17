<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateBILLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_b_i_l_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('LTRBillNO')->nullable();
            $table->date('date')->nullable();
            $table->string('TO')->nullable();
            $table->string('GSTNO')->nullable();
            $table->string('NameOfCenterFrom')->nullable();
            $table->string('NameOfCenterTO')->nullable();
            $table->date('DateOfOperationFrom')->nullable();
            $table->date('DateOfOperationTO')->nullable();
            $table->integer('TransportingFrom')->nullable();
            $table->integer('TransportingTO')->nullable();
            $table->string('description')->nullable();
            $table->double('TotalQTY', 8, 2)->nullable();
            $table->double('RATE', 8, 2)->nullable();
            $table->double('AMOUNT', 8, 2)->nullable();
            $table->integer('GST')->nullable();
            $table->double('GSTAMOUNT', 8, 2)->nullable();
            $table->integer('SGST')->nullable();
            $table->double('SGSTAMOUNT', 8, 2)->nullable();
            $table->double('ROUNDOFF', 8, 2)->nullable();
            $table->double('NETAMOUNT', 8, 2)->nullable();
            $table->string('ACNUMBER')->nullable();
            $table->string('IFSCCODE')->nullable();
            $table->string('BANKADDRESS')->nullable();
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
        Schema::dropIfExists('generate_b_i_l_l_s');
    }
}
