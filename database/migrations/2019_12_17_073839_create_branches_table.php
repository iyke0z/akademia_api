<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branchname');
            $table->foreignId('schoolid')->constrained('schools');
            $table->string('branchaddress');
            $table->foreignId('countryid')->constrained('countries')->nullable();
            $table->foreignId('stateid')->constrained('states')->nullable();
            $table->foreignId('cityid')->constrained('cities')->nullable();
            $table->string('branchtel')->nullable();
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
        Schema::dropIfExists('branches');
    }
}
