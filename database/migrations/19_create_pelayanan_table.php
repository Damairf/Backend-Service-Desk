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
            $table->unsignedBigInteger('ID_User')->nullable(false);
            $table->unsignedBigInteger('ID_Jenis_Pelayanan')->nullable(false);
            $table->unsignedBigInteger('ID_Survey')->nullable(false);
            $table->string('Perihal')->nullable(false);
            $table->text('Deskripsi')->nullable(false);
            $table->string('Surat_Dinas_Path')->nullable(false);
            $table->string('Lampiran_Path')->nullable(false);
            $table->unsignedBigInteger('ID_Unit');
            $table->unsignedBigInteger('ID_Teknis');
            $table->timestamps();

            $table->foreign('ID_User')->references('ID_User')->on('user');
            $table->foreign('ID_Unit')->references('ID_User')->on('user');
            $table->foreign('ID_Teknis')->references('ID_User')->on('user');
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
