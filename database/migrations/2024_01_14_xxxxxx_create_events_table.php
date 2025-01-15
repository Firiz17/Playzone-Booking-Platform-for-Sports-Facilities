<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('sport');
            $table->dateTime('date');
            $table->string('time');
            $table->string('city');
            $table->string('location');
            $table->string('prizes');
            $table->integer('total_slots');
            $table->integer('available_slots');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}; 