<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadingReceiveingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loading_receiveings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loading_entries_id');
            $table->date('receiving_date');         
            $table->integer('received_bag')->default(0);
            $table->integer('received_mt')->default(0);             
            $table->integer('shortage_bag')->default(0);
            $table->integer('shortage_rs')->default(0);
            $table->integer('weight_gain')->default(0);             
            $table->double('gross_amt', 8, 2)->nullable();
            $table->double('net_amt', 8, 2)->nullable();
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('loading_receiveings');
    }
}
