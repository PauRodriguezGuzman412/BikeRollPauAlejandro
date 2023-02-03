<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_courses');
            $table->foreign('id_courses')->references('id')->on('courses');
            $table->unsignedBigInteger('id_runners');
            $table->foreign('id_runners')->references('id')->on('runners');
            $table->integer('points');
            $table->timestamps();
            // $table->foreign('dorsal')->references('dorsal')->on('runners');
        });
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
};
