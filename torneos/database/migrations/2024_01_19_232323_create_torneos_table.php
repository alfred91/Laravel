<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            //$table->string('juego');
            $table->date('fechaInicio');
            $table->integer('premio1');
            $table->integer('premio2');
            $table->integer('maxParticipantes');
            $table->unsignedBigInteger('juego_id');
            $table->foreign('juego_id')->references('id')->on('juegos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
