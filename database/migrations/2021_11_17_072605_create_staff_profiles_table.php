<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staffuseraccountid')->constrained('users');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othernames');
            $table->string('dob');
            $table->foreignId('genderid')->constrained('genders');
            $table->foreignId('nationalityid')->constrained('countries');
            $table->foreignId('stateoforiginid')->constrained('states');
            $table->string('local_govt_area');
            $table->string('appointment_date')->nullable();
            $table->enum('religion', ['christian', 'islam']);
            $table->string('address');
            $table->foreignId('countryid')->constrained('countries');
            $table->foreignId('stateid')->constrained('states');
            $table->foreignId('cityid')->constrained('cities');
            $table->string('contactemail');
            $table->string('conacttel');
            $table->string('photo');
            $table->foreignId('rankid')->constrained('ranks');
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
        Schema::dropIfExists('staff_profiles');
    }
}
