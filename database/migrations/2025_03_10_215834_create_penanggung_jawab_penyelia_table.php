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
        Schema::create('penanggung_jawab_penyelia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_sertifikat_halal_id')->constrained('pengajuan_sertifikat_halal')->onDelete('cascade');
            $table->string('nama_penyelia');
            $table->string('nik_penyelia');
            $table->string('nomor_whatsapp_penyelia');
            $table->string('email_penyelia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penanggung_jawab_penyelia');
    }
};
