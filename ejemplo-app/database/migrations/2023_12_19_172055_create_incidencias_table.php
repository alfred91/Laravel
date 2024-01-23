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
        Schema::create('incidencias', function (Blueprint $table) {
            
            $table->id();
            $table->double("latitud");
            $table->double("longitud");
            $table->string("ciudad");
            $table->string("direccion");
            $table->string("etiqueta", 3);
            $table->text("descripcion");
            $table->string("estado");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
