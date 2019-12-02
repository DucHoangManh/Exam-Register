<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('subject_id');
            $table->date('date');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->timestamps();

            $table->foreign('room_id')
                ->references('rooms')
                ->on('id')
                ->delete('cascade');
            $table->foreign('subject_id')
                ->references('subjects')
                ->on('id')
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
        Schema::dropIfExists('shifts');
    }
}
