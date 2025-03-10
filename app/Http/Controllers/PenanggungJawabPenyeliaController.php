<?php

namespace App\Http\Controllers;

use App\Models\PenanggungJawabPenyelia;
use App\Models\PengajuanSertifikatHalal;
use Illuminate\Http\Request;

class PenanggungJawabPenyeliaController extends Controller
{
    public function create($pengajuanId)
    {
        $pengajuan = PengajuanSertifikatHalal::findOrFail($pengajuanId);

        if ($pengajuan->penanggungJawabPenyelia) {
            return redirect()->route('service.halalcertification');
        }

        return view('user.service.halalcertification.penyelia.create', compact('pengajuan'));
    }

    public function store(Request $request, $pengajuanId)
    {
        $request->validate([
            'nama_penyelia' => 'required',
            'nik_penyelia' => 'required|numeric',
            'nomor_whatsapp_penyelia' => 'required|numeric',
            'email_penyelia' => 'required|email',
        ]);

        PenanggungJawabPenyelia::create([
            'pengajuan_sertifikat_halal_id' => $pengajuanId,
            'nama_penyelia' => $request->nama_penyelia,
            'nik_penyelia' => $request->nik_penyelia,
            'nomor_whatsapp_penyelia' => $request->nomor_whatsapp_penyelia,
            'email_penyelia' => $request->email_penyelia,
        ]);

        return redirect()->route('service.halalcertification');
    }

    public function edit($id)
    {
        $penyelia = PenanggungJawabPenyelia::findOrFail($id);
        return view('user.service.halalcertification.penyelia.edit', compact('penyelia'));
    }

    public function update(Request $request, $id)
    {
        $penyelia = PenanggungJawabPenyelia::findOrFail($id);

        $request->validate([
            'nama_penyelia' => 'required',
            'nik_penyelia' => 'required|numeric',
            'nomor_whatsapp_penyelia' => 'required|numeric',
            'email_penyelia' => 'required|email',
        ]);

        $penyelia->update($request->all());

        return redirect()->route('service.halalcertification');
    }
}
