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
        Schema::create('alur', function (Blueprint $table) {
            $table->id('ID_Alur');
            $table->unsignedBigInteger('ID_Jenis_Pelayanan');
            $table->unsignedBigInteger('ID_Isi Alur');
            $table->timestamps();
            
            $table->foreign('ID_Jenis_Pelayanan')->references('ID_Jenis_Pelayanan')->on('reff_jenis_pelayanan');
            $table->foreign('ID_Isi Alur')->references('ID_Isi Alur')->on('isi_alur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alur');
    }
};
