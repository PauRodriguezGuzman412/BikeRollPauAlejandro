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
            $table->unsignedBigInteger('id_runners');
            $table->foreign('id_runners')->references('id')->on('runners');
            $table->string('dorsal');
            $table->unsignedBigInteger('qr');
            $table->foreign('id_dorsal')->references('dorsal')->on('runners');
            $table->unsignedBigInteger('insurance');
            $table->foreign('id_insurance')->references('id')->on('insurances');
            //TODO: Se necesita un campo más, pero no sé cual
            // $table->foreign('dorsal')->references('dorsal')->on('runners');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses_register');
    }
};
