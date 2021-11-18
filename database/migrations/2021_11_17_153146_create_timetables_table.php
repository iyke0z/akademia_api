<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classRoomGroupid')->constrained('class_room_groups')->nullabe();
            $table->foreignId('classGroupId')->constrained('class_groups')->nullabe();
            $table->foreignId('timetabletype')->constrained('timetable_types');
            $table->foreignId('subjectid')->constrained('subjects')->nullabe();
            $table->string('from');
            $table->string('to');
            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday','friday','saturday','sunday']);
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
        Schema::dropIfExists('timetables');
    }
}
