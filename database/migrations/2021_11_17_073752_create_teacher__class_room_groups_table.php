<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassRoomGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // for form or class managers (staff)
        Schema::create('teacher__class_room_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacherid')->constrained('users');
            $table->foreignId('classroomgroupid')->constrained('class_room_groups');
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
        Schema::dropIfExists('teacher__class_room_groups');
    }
}
