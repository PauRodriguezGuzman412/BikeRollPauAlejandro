<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            // $table->string('dni')->primary();
            $table->string('name');
            $table->string('address');
            $table->dateTime('date_of_birth');
            $table->enum('federated',["open","pro"]);
            $table->integer('federated_num')->nullable();
            $table->string('dorsal')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('runners');
    }
};
