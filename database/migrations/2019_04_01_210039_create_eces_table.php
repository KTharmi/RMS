<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('type_id');
            $table->string('year');
            $table->Integer('question1');
            $table->Integer('question2');
            $table->Integer('question3');
            $table->Integer('question4');
            $table->Integer('mark');
            $table->timestamps();

            $table->foreign('student_id')
            ->references('id')->on('students')
            ->onDelete('cascade');

            $table->foreign('subject_id')
            ->references('id')->on('subjects')
            ->onDelete('cascade');

            $table->foreign('type_id')
            ->references('id')->on('ece_types')
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
        Schema::dropIfExists('eces');
    }
}
