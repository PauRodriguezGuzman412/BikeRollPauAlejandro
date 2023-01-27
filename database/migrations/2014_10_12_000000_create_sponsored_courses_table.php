<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sponsored_courses', function (Blueprint $table) {
            $table->id();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('sponsor_id')->references('id')->on('sponsors')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('sponsored_courses');
    }
};
