<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id_teacher');
            $table->unsignedBigInteger('id_class');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_teacher');
            $table->string('cin');
            $table->string('email')->unique();
            $table->string('picture_teacher');
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
        Schema::dropIfExists('teachers');
    }
}
