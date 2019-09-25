<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code',50)->index()->unique();
            $table->string('course_name');
            $table->string('level',50);
            $table->Integer('semester');
            $table->Integer('credit');
            $table->enum('is_active', ['Yes', 'No'])->defualt('Yes');
            $table->unsignedBigInteger('lect_id')->nullable();
            $table->unsignedBigInteger('dept_id')->nullable();
            $table->timestamps();

            $table->foreign('lect_id')
            ->references('id')->on('lecturers')
            ->onDelete('cascade');

            $table->foreign('dept_id')
            ->references('id')->on('departments')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
