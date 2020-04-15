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
            $table->bigIncrements('id');

            $table->bigInteger('id_class')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('phone_teacher');
            $table->string('email')->unique();
            $table->string('picture_teacher');
            $table->timestamps();
            $table->foreign('id_class')->references('id')->on('classes');
          
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
