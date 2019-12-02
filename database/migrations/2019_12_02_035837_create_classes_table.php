<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('subject_id');
            $table->timestamps();

            $table->foreign('teacher_id')
                ->references('teachers')
                ->on('id')
                ->delete('cascade');
            $table->foreign('subject_id')
                ->references('subjects')
                ->on('id')
                ->delete('cascade');
        });

        Schema::create('student_class', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('student_id');
            $table->timestamps();

            $table->foreign('class_id')
                ->references('classes')
                ->on('id')
                ->delete('cascade');
            $table->foreign('student_id')
                ->references('students')
                ->on('id')
                ->delete('cascade');
            $table->primary(['class_id', 'student_id']);
        });

        Shema::create('student_shift', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('shift_id');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('students')
                ->on('id')
                ->delete('cascade');
            $table->foreign('shift_id')
                ->references('id')
                ->on('id')
                ->delete('cascade');
            $table->primary(['student_id', 'shift_id']);
        });

        Schema::create('student_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('room_id');
            $table->smallInteger('seatNumber');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('students')
                ->on('id')
                ->delete('cascade');
            $table->foreign('room_id')
                ->references('rooms')
                ->on('id')
                ->delete('cascade');
            $table->primary(['student_id', 'room_id']);
        });

        Schema::create('shift_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shift_id');
            $table->unsignedInteger('room_id');
            $table->timestamps();

            $table->foreign('shift_id')
                ->references('shifts')
                ->on('id')
                ->delete('cascade');
            $table->foreign('room_id')
                ->references('rooms')
                ->on('id')
                ->delete('cascade');
            $table->primary(['shift_id', 'room_id']);
        });

        Schema::create('exam_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('subjects_id');

            $table->foreign('exam_id')
                ->references('exams')
                ->on('id')
                ->delete('cascade');
            $table->foreign('subject_id')
                ->references('subjects')
                ->on('id')
                ->delete('cascade');
            $table->primary(['exam_id', 'subject_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
        Schema::dropIfExists('student_class');
        Schema::dropIfExists('student_room');
        Schema::dropIfExists('student_shift');
        Schema::dropIfExists('shift_room');
        Schema::dropIfExists('exam_subject');
    }
}
