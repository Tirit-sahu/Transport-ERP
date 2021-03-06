<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_name');
            $table->string('bill_number');
            $table->string('date');
            $table->string('receiving_proof');
            $table->double('discount', 8, 2)->nullable();
            $table->string('purchase_type');
            $table->integer('godown');
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
        Schema::dropIfExists('purchase_entries');
    }
}
