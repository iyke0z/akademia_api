<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('schoolname');
            $table->string('schoolemail')->unique();
            $table->string('schooltel')->unique();
            $table->string('schoollogo')->nullable();
            $table->string('schoolmotto');
            $table->string('address');
            $table->foreignId('countryid')->constrained('countries');
            $table->foreignId('stateid')->constrained('states');
            $table->foreignId('cityid')->constrained('cities');
            $table->string('year_of_establishment');
            $table->string('schoolzone')->nullable();
            $table->string('schoolchapter')->nullable();
            $table->text('associationAffiliation')->nullable();
            $table->string('educationDistrict')->nullable();
            // $table->foreignId('createdById')->constrained('users')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
