<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->float('slope');
            $table->string('map_image');
            $table->string('maxim_participants');
            $table->float('km');
            $table->date('start_date');
            $table->string('start_point');
            $table->string('promotion_banner');
            $table->integer('sponsoring_money');
            $table->time('course_duration');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
