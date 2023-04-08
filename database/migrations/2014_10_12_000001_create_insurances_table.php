<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('CIF')->unique();
            $table->string('name');
            $table->string('address');
            $table->float('price');
            $table->boolean('active')->default(1);
            $table->timestamps();
            //TODO: Faltan relaciones
        });
    }

    public function down()
    {
        Schema::dropIfExists('insurances');
    }
};
