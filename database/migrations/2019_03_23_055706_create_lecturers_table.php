<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_id',50)->index()->unique();
            $table->string('name');
            $table->unsignedBigInteger('dept_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->enum('is_hod', ['Yes', 'No']);
            $table->enum('is_active', ['Yes', 'No']);
            $table->timestamps();

            $table->foreign('dept_id')
            ->references('id')->on('departments')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('lecturers');
    }
}
