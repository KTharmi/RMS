<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('type_id');
            $table->string('year');
            $table->Integer('ica1');
            $table->Integer('ica2');
            $table->Integer('ica3');
            $table->Integer('mark');
            $table->timestamps();

            $table->foreign('student_id')
            ->references('id')->on('students')
            ->onDelete('cascade');

            $table->foreign('subject_id')
            ->references('id')->on('subjects')
            ->onDelete('cascade');

            $table->foreign('type_id')
            ->references('id')->on('ica_types')
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
        Schema::dropIfExists('icas');
    }
}
