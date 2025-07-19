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
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id('ID_Pelayanan');
            $table->unsignedBigInteger('ID_User');
            $table->unsignedBigInteger('ID_Jenis_Pelayanan');
            $table->unsignedBigInteger('ID_Survey');
            $table->string('Perihal');
            $table->text('Deskripsi');
            $table->string('PIC');
            $table->string('Surat_Dinas_Path');
            $table->string('Lampiran_Path');
            $table->string('Progress');
            $table->timestamps();

            $table->foreign('ID_User')->references('ID_User')->on('user');
            $table->foreign('ID_Jenis_Pelayanan')->references('ID_Jenis_Pelayanan')->on('reff_jenis_pelayanan');
            $table->foreign('ID_Survey')->references('ID_Survey')->on('survey');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan');
    }
};
