<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('designation');
            $table->date('doj')->nullable();
            
            $table->string('pan_no')->nullable();
            $table->string('lisence_no')->nullable();
            $table->date('lisence_date')->nullable();
            $table->date('lisence_date_exp')->nullable();
            
            $table->date('dob')->nullable();
            $table->string('mobile');
            $table->string('mobile2')->nullable();
            $table->double('salary', 8, 2)->default(0);

            $table->string('bank_ac_no')->nullable();
            $table->string('address')->nullable();
            
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
        Schema::dropIfExists('employees');
    }
}
