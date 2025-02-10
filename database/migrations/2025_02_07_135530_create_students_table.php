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
           $table->bigIncrements('id');
           $table->integer('matricula')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->integer('age');
            $table->bigInteger('cellNum');
            $table->integer('group_id');
            $table->timestamps();

            

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
