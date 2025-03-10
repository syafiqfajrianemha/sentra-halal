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
        Schema::create('bahans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_sertifikat_halal_id')->constrained('pengajuan_sertifikat_halal')->onDelete('cascade');
            $table->string('nama_bahan');
            $table->string('merek')->nullable();
            $table->string('produsen')->nullable();
            $table->string('nomor_sertifikat_halal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahans');
    }
};
