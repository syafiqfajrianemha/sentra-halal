<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSertifikatHalal;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    // Pengajuan sertifikasi halal
    public function halalCertification()
    {
        $limit = 10;
        $userId = Auth::user()->id;

        $pengajuanSertifikatHalals = PengajuanSertifikatHalal::with(['penanggungJawabPenyelia', 'bahans'])
            ->orderBy('id', 'desc')
            ->where('user_id', $userId)
            ->paginate($limit);

        return view('user.service.halalcertification.index', compact('pengajuanSertifikatHalals'));
    }

    public function halalCertificationRegister()
    {
        return view('user.service.halalcertification.register');
    }

    public function halalCertificationRegisterStore(Request $request)
    {
        $request->validate([
            'nama_pelaku_usaha' => 'required',
            'nomor_whatsapp' => 'required',
            'alamat_ktp' => 'required',
            'rt_rw' => 'required',
            'kelurahan_desa' => 'required',
            'kecamatan' => 'required',
            'nik' => 'required',
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'luas_lahan_usaha' => 'required',
            'jenis_produk' => 'required',
            'modal_awal' => 'required|integer',
            'jumlah_tenaga_kerja' => 'required|integer',
            'kapasitas_produksi' => 'required',
            'usaha_berdiri_sejak' => 'required',
            'mulai_usaha' => 'required|date',
        ]);

        PengajuanSertifikatHalal::create([
            'user_id' => Auth::id(),
            'nama_pelaku_usaha' => $request->nama_pelaku_usaha,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'alamat_ktp' => $request->alamat_ktp,
            'rt_rw' => $request->rt_rw,
            'kelurahan_desa' => $request->kelurahan_desa,
            'kecamatan' => $request->kecamatan,
            'nik' => $request->nik,
            'npwp' => $request->npwp,
            'bpjs' => $request->bpjs,
            'nama_usaha' => $request->nama_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'luas_lahan_usaha' => $request->luas_lahan_usaha,
            'jenis_produk' => $request->jenis_produk,
            'modal_awal' => $request->modal_awal,
            'jumlah_tenaga_kerja' => $request->jumlah_tenaga_kerja,
            'kapasitas_produksi' => $request->kapasitas_produksi,
            'usaha_berdiri_sejak' => $request->usaha_berdiri_sejak,
            'nomor_nib' => $request->nomor_nib,
            'mulai_usaha' => $request->mulai_usaha
        ]);

        return redirect()->route('service.halalcertification');
    }

    public function halalCompanion()
    {
        return view('user.service.halalcompanion.index');
    }

    public function slaughterer()
    {
        return view('user.service.slaughterer.index');
    }
}
