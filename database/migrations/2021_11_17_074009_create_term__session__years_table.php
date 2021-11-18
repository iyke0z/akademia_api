<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermSessionYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term__session__years', function (Blueprint $table) {
            $table->id();
            $table->foreignId('termid')->constrained('terms');
            $table->foreignId('sessionid')->constrained('academic_sessions');
            $table->foreignId('yearid')->constrained('academic_years');
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
        Schema::dropIfExists('term__session__years');
    }
}
