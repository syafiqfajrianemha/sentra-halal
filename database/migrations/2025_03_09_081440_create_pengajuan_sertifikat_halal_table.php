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
        Schema::create('pengajuan_sertifikat_halal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_pelaku_usaha');
            $table->string('nomor_whatsapp');
            $table->text('alamat_ktp');
            $table->string('rt_rw');
            $table->string('kelurahan_desa');
            $table->string('kecamatan');
            $table->string('nik');
            $table->string('npwp')->nullable();
            $table->string('bpjs')->nullable();
            $table->string('nama_usaha');
            $table->text('alamat_usaha');
            $table->string('luas_lahan_usaha');
            $table->string('jenis_produk');
            $table->integer('modal_awal');
            $table->integer('jumlah_tenaga_kerja');
            $table->string('kapasitas_produksi');
            $table->year('usaha_berdiri_sejak');
            $table->string('nomor_nib')->nullable();
            $table->date('mulai_usaha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_sertifikat_halal');
    }
};
