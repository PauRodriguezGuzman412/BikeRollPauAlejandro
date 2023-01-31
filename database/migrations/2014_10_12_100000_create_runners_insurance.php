<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('runners_insurance', function (Blueprint $table) {
            $table->unsignedBigInteger('insurance');
            $table->foreign('insurance')->references('id')->on('insurances');
            $table->unsignedBigInteger('id_courses');
            $table->foreign('id_courses')->references('id')->on('courses');
            $table->unsignedBigInteger('id_runners');
            $table->foreign('id_runners')->references('id')->on('runners');
            //TODO: Faltan relaciones
        });
    }

    public function down()
    {
        Schema::dropIfExists('runners_insurance');
    }
};
