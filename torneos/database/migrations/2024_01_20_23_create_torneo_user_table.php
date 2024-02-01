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
        Schema::create('torneo_user', function (Blueprint $table) {
            $table->unsignedBigInteger('torneo_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('nivel');
            $table->foreign('torneo_id')->references('id')->on('torneos')->onUpdate('cascade')
                ->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_user');
    }
};
