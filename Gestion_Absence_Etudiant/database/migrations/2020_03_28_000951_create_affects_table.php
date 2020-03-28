<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_modul');
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
            $table->foreign('id_modul')->references('id_modul')->on('moduls');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affects');
    }
}
