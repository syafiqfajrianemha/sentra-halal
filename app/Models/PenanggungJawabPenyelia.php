<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenanggungJawabPenyelia extends Model
{
    use HasFactory;

    protected $table = 'penanggung_jawab_penyelia';

    protected $guarded = ['id'];

    public function pengajuanSertifikatHalal()
    {
        return $this->belongsTo(PengajuanSertifikatHalal::class, 'pengajuan_sertifikat_halal_id');
    }
}
