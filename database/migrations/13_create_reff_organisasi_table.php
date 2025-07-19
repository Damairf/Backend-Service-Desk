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
        Schema::create('reff_organisasi', function (Blueprint $table) {
            $table->id('ID_Organisasi');
            $table->unsignedBigInteger('ID_Status')->nullable(false);
            $table->string('Nama_OPD')->nullable(false);
            $table->string('Induk_OPD');
            $table->string('Nama_Pengelola')->nullable(false);
            $table->string('No_HP_Pengelola')->nullable(false);
            $table->string('Email')->nullable(false);
            $table->timestamps();

            $table->foreign('ID_Status')->references('ID_Status')->on('reff_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reff_organisasi');
    }
};
