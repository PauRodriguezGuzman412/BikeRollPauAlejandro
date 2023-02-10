<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('CIF')->unique();
            $table->string('logo');
            $table->string('address');
            $table->boolean('principal_page');
            $table->timestamp('failed_at')->useCurrent();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
};
