<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseEntryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_entry_details', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_entry_id');
            $table->integer('item');
            $table->integer('unit');
            $table->double('rate', 8, 2);
            $table->integer('qty');
            $table->integer('gst')->comment('%');
            $table->double('gst_type');
            $table->double('total_without_tax', 8, 2);
            $table->double('total_amount', 8, 2);
            $table->integer('createdById');
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
        Schema::dropIfExists('purchase_entry_details');
    }
}
