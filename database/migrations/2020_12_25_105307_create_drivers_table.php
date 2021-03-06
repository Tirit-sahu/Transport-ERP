<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('employeeName');
            $table->string('designation');
            $table->date('DOJ');
            $table->string('mobile')->nullable();
            $table->string('ESIC')->nullable();
            $table->string('PAN')->nullable();
            $table->string('lisenceNo')->nullable();
            $table->date('lisenceIssueDate')->nullable();
            $table->date('lisenceExpireDate')->nullable();
            $table->string('companyName')->nullable();
            $table->date('DOB')->nullable();
            $table->date('medicalExpireDate')->nullable();
            $table->double('Salary', 8, 2)->nullable();
            $table->string('address')->nullable();
            $table->string('uploadDriverLisence')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
