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
                ->references('id')
                ->on('teachers')
                ->delete('cascade');
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->delete('cascade');
        });

        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->string('code');
            $table->date('date');
            $table->time('start');
            $table->time('end');
            $table->timestamps();

            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->delete('cascade');
        });

        Schema::create('student_class', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('student_id');
            $table->smallInteger('is_baned')->default(0);
            $table->timestamps();

            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->delete('cascade');
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->delete('cascade');
        });

        Schema::create('student_shift', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('shift_id');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->delete('cascade');
            $table->foreign('shift_id')
                ->references('id')
                ->on('shifts')
                ->delete('cascade');
        });

        Schema::create('student_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('room_id');
            $table->smallInteger('seatNumber');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->delete('cascade');
            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->delete('cascade');
        });

        Schema::create('shift_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shift_id');
            $table->unsignedInteger('room_id');
            $table->timestamps();

            $table->foreign('shift_id')
                ->references('id')
                ->on('shifts')
                ->delete('cascade');
            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->delete('cascade');
        });

        Schema::create('exam_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('subject_id');

            $table->foreign('exam_id')
                ->references('id')
                ->on('exams')
                ->delete('cascade');
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('shifts');
        Schema::dropIfExists('student_class');
        Schema::dropIfExists('student_room');
        Schema::dropIfExists('student_shift');
        Schema::dropIfExists('shift_room');
        Schema::dropIfExists('exam_subject');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
