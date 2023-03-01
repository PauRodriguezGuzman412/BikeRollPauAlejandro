<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            // $table->id();
            // $table->string('dni')->primary();
            $table->string('dni')->unique()->primary();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->date('date_of_birth');
            $table->enum('federated',["OPEN","PRO"]);
            $table->integer('federated_num')->unique()->nullable();
            $table->boolean('active')->default(1);
            $table->integer('ranking_points')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('runners');
    }
};
