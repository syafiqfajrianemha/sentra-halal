<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSertifikatHalal extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_sertifikat_halal';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penanggungJawabPenyelia()
    {
        return $this->hasOne(PenanggungJawabPenyelia::class, 'pengajuan_sertifikat_halal_id');
    }

    public function bahans()
    {
        return $this->hasMany(Bahan::class, 'pengajuan_sertifikat_halal_id');
    }
}
