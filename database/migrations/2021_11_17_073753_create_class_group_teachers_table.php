<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassGroupTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_group_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_subject_id')->constrained('subject__teachers');
            $table->foreignId('classgroupid')->constrained('class_groups');
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
        Schema::dropIfExists('class_group_teachers');
    }
}
