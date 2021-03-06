<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemIssueDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_issue_details', function (Blueprint $table) {
            $table->id();
            $table->integer('item')->nullable();
            $table->integer('unit')->nullable();
            $table->string('HSN')->nullable();
            $table->text('exchangeReceipt')->nullable();
            $table->text('itemType')->nullable();
            $table->double('QTY',8,2)->nullable();
            $table->double('rate',8,2)->nullable();
            $table->double('AMT',8,2)->nullable();
            $table->integer('itemIssueID')->nullable();
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
        Schema::dropIfExists('item_issue_details');
    }
}
