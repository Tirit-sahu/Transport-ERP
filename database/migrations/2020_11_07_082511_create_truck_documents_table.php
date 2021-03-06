<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('truck_id');
            $table->date('permit_issue_date')->nullable();
            $table->date('permit_expiry_date')->nullable();
            $table->date('fitness_issue_date')->nullable();
            $table->date('fitness_expiry_date')->nullable();
            $table->date('ins_issue_date')->nullable();
            $table->date('ins_expiry_date')->nullable();
            $table->date('road_issue_date')->nullable();
            $table->date('road_expiry_date')->nullable();
            $table->date('poll_issue_date')->nullable();
            $table->date('poll_expiry_date')->nullable();
            $table->date('noti_issue_date')->nullable();
            $table->date('noti_expiry_date')->nullable();
            $table->date('khanij_issue_date')->nullable();
            $table->date('khanij_expiry_date')->nullable();

            $table->string('permit_file')->nullable();
            $table->string('fitness_file')->nullable();
            $table->string('ins_file')->nullable();
            $table->string('road_file')->nullable();
            $table->string('poll_file')->nullable();
            $table->string('nati_file')->nullable();
            $table->string('khanij_file')->nullable();
            $table->integer('createdby');
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
        Schema::dropIfExists('truck_documents');
    }
}
