<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\PengajuanSertifikatHalal;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function create($pengajuanId)
    {
        $pengajuan = PengajuanSertifikatHalal::findOrFail($pengajuanId);

        if ($pengajuan->bahans) {
            return redirect()->route('service.halalcertification');
        }

        return view('user.service.halalcertification.bahan.create', compact('pengajuan'));
    }

    public function store(Request $request, $pengajuanId)
    {
        $request->validate([
            'nama_bahan' => 'required',
            'merek' => 'nullable|string',
            'produsen' => 'nullable|string',
            'nomor_sertifikat_halal' => 'nullable|string',
        ]);

        Bahan::create([
            'pengajuan_sertifikat_halal_id' => $pengajuanId,
            'nama_bahan' => $request->nama_bahan,
            'merek' => $request->merek,
            'produsen' => $request->produsen,
            'nomor_sertifikat_halal' => $request->nomor_sertifikat_halal,
        ]);

        return redirect()->route('service.halalcertification');
    }

    public function edit($id)
    {
        $bahan = Bahan::findOrFail($id);
        return view('user.service.halalcertification.bahan.edit', compact('bahan'));
    }

    public function update(Request $request, $id)
    {
        $bahan = Bahan::findOrFail($id);

        $request->validate([
            'nama_bahan' => 'required',
            'merek' => 'nullable|string',
            'produsen' => 'nullable|string',
            'nomor_sertifikat_halal' => 'nullable|string',
        ]);

        $bahan->update($request->all());

        return redirect()->route('service.halalcertification');
    }
}
