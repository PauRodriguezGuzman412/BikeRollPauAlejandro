<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses_register', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_courses');
            $table->foreign('id_courses')->references('id')->on('courses');
            $table->string('dni_runners');
            $table->foreign('dni_runners')->references('dni')->on('runners');
            $table->integer('dorsal');
            $table->unsignedBigInteger('insurance');
            $table->foreign('insurance')->references('id')->on('insurances');
            $table->integer('points')->nullable();
            $table->string('data')->nullable();
            $table->timestamps();
            //TODO: Se necesita un campo más, pero no sé cual
            // $table->foreign('dorsal')->references('dorsal')->on('runners');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses_register');
    }
};
