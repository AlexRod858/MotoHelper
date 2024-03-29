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
        Schema::create('problemas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descripcion');
            // 
            $table->unsignedBigInteger('id_moto');
            $table->foreign('id_moto')->references('id')->on('motos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problemas');
    }
};
