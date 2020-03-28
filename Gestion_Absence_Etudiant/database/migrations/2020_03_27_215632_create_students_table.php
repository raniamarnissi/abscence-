<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('code_student');
            $table->unsignedBigInteger('id_class');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cin');
            $table->date('date_birth');
            $table->string('adress_stud');
            $table->string('phone_stud');
            $table->string('picture_stud');
            $table->foreign('id_class')->references('id_class')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
