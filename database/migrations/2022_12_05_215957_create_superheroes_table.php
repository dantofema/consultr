<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('strength')->nullable();
            $table->string('speed')->nullable();
            $table->string('durability')->nullable();
            $table->string('power')->nullable();
            $table->string('combat')->nullable();
            $table->string('race')->nullable();
            $table->string('height_0')->nullable();
            $table->string('height_1')->nullable();
            $table->string('weight_0')->nullable();
            $table->string('weight_1')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('superheroes');
    }
};
