<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userid')->constrained('users');
            $table->enum('genotype',['AA', 'AS', 'AC', 'SS']);
            $table->enum('blood_group', ['A+ve', 'B+ve', 'AB+ve', '0+ve', 'A-ve', 'B-ve', 'AB-ve', '0-ve']);
            $table->string('height');
            $table->string('weight');
            $table->text('comment');
            $table->foreignId('createdById')->constrained('users');
            $table->softDeletes();
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
        Schema::dropIfExists('medical_records');
    }
}
