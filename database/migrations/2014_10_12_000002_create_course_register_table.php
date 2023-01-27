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
            $table->foreign('id_courses')->references('id')->on('courses');
            $table->foreign('id_runners')->references('id')->on('runners');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses_register');
    }
};
