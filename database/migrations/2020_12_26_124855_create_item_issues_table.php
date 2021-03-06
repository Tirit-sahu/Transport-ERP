<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_issues', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle');
            $table->integer('driver');
            $table->text('issueDate');
            $table->text('issueNumber');
            $table->integer('meterReading');
            $table->text('narration')->nullable();
            $table->string('_token')->nullable();
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
        Schema::dropIfExists('item_issues');
    }
}
