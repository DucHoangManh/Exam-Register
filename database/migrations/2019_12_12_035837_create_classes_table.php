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
            $table->unsignedInteger('module_id');
            $table->timestamps();
        });

        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->date('date');
            $table->time('start');
            $table->time('end');
            $table->timestamps();
        });

        Schema::create('student_class', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('test_id')->nullable();
            $table->smallInteger('is_baned')->default(0);
            $table->smallInteger('id_number')->nullable();
        });

        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shift_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('class_id');
        });

        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('subject_id');
        });

        Schema::create('module_shift', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('module_id');
            $table->unsignedInteger('shift_id');
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
        Schema::dropIfExists('shifts');
        Schema::dropIfExists('student_class');
        Schema::dropIfExists('shift_room');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('module_shift');
    }
}
