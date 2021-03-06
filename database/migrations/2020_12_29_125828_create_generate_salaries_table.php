<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('driver');
            $table->integer('vehicle');
            $table->double('AMT', 8, 2);
            $table->text('paymentMode');
            $table->text('paymentDate');
            $table->text('remark');
            $table->string('_token');
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
        Schema::dropIfExists('generate_salaries');
    }
}
