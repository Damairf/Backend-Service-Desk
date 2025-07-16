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
        Schema::create('user', function (Blueprint $table) {
            $table->id('ID_User');
            $table->unsignedBigInteger('ID_Role')->constrained('reff_Role');
            $table->unsignedBigInteger('ID_Jabatan')->constrained('reff_jabatan');
            $table->unsignedBigInteger('ID_Organisasi')->constrained('reff_organisasi');
            $table->unsignedBigInteger('ID_Status')->constrained('reff_status');
            $table->decimal('NIP', 18, 0);
            $table->string('Nama_Depan');
            $table->string('Nama_Belakang');
            $table->string('Username');
            $table->string('Email');
            $table->integer('No_HP');
            $table->string('Password');
            $table->timestamps();

            $table->foreign('ID_Role')->references('ID_Role')->on('reff_role');
            $table->foreign('ID_Jabatan')->references('ID_Jabatan')->on('reff_jabatan');
            $table->foreign('ID_Organisasi')->references('ID_Organisasi')->on('reff_organisasi');
            $table->foreign('ID_Status')->references('ID_Status')->on('reff_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
