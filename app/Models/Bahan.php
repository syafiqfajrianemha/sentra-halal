<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pengajuan()
    {
        return $this->belongsTo(PengajuanSertifikatHalal::class, 'pengajuan_sertifikat_halal_id');
    }
}
