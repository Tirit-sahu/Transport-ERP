<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_mappings', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle')->nullable();
            $table->integer('driver')->nullable();
            $table->text('leaveDateD')->nullable();
            $table->integer('helper')->nullable();
            $table->text('leaveDateH')->nullable();
            $table->text('fromeDate')->nullable();
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
        Schema::dropIfExists('driver_mappings');
    }
}
