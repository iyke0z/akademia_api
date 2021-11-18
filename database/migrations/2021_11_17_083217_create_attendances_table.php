<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studentuseraccount')->constrained('users');
            $table->foreignId('classid')->constrained('class_room_groups');
            $table->foreignId('subject')->constrained('subject__class_groups');
            $table->enum('status', ['present', 'absent']);
            $table->string('date');
            $table->foreignId('absentedBy')->constrained('users');
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
        Schema::dropIfExists('attendances');
    }
}
