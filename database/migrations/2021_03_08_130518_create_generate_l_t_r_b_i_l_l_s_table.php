<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateLTRBILLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_l_t_r_b_i_l_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('LTRBillNO')->nullable();
            $table->date('date')->nullable();
            $table->string('TO')->nullable();
            $table->string('GSTNO')->nullable();
            $table->string('NameOfCenterFrom')->nullable();
            $table->string('NameOfCenterTO')->nullable();
            $table->date('DateOfOperationFrom')->nullable();
            $table->date('DateOfOperationTO')->nullable();
            $table->integer('ITEM')->nullable();
            $table->string('description')->nullable();
            $table->integer('NumberOfTruck')->nullable();
            $table->integer('NumberOfBags')->nullable();
            $table->double('TotalWeight', 8, 2)->nullable();
            $table->double('RATE', 8, 2)->nullable();
            $table->double('KM', 8, 2)->nullable();
            $table->double('AMOUNT', 8, 2)->nullable();
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
        Schema::dropIfExists('generate_l_t_r_b_i_l_l_s');
    }
}
