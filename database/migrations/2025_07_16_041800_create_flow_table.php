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
        Schema::create('flow', function (Blueprint $table) {
            $table->id('ID_Flow');
            $table->unsignedBigInteger('ID_Flow_Default');
            $table->unsignedBigInteger('ID_Flow_Custom');
            
            $table->foreign('ID_Flow_Default')->references('ID_Flow_Default')->on('flow_default');
            $table->foreign('ID_Flow_Custom')->references('ID_Flow_Custom')->on('flow_custom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flow');
    }
};
