<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenses', function (Blueprint $table) {
            $table->bigIncrements('id_abs');
            $table->unsignedBigInteger('code_student');
            $table->unsignedBigInteger('id_seance');
            $table->dateTime('date_abs');
            $table->foreign('code_student')->references('code_student')->on('students');
            $table->foreign('id_seance')->references('id_seance')->on('seances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absenses');
    }
}
