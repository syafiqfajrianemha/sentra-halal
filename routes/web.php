<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\PenanggungJawabPenyeliaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMenuController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda', 301);

Route::get('/beranda', [HomeController::class, 'index'])->name('home.index');

Route::get('/profil/tentang-sentra-halal', [ProfileMenuController::class, 'about'])->name('profile.about');
Route::get('/profil/visi-misi', [ProfileMenuController::class, 'visionMission'])->name('profile.visionmission');
Route::get('/profil/struktur-organisasi', [ProfileMenuController::class, 'organizationStructure'])->name('profile.organizationstructure');

Route::get('/lembaga/pelatihan-pendamping-halal', [InstitutionController::class, 'halalCompanion'])->name('institution.halalcompanion');
Route::get('/lembaga/juru-sembelih-halal', [InstitutionController::class, 'slaughterer'])->name('institution.slaughterer');

Route::get('/kegiatan', [ActivityController::class, 'index'])->name('activity.index');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth', 'verified', RoleCheck::class.':admin'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/manajemen-akun', [UserController::class, 'index'])->name('user');
});

Route::middleware(['auth', RoleCheck::class.':admin,user'])->group(function () {
    Route::prefix('layanan')->group(function () {
        Route::prefix('pengajuan-sertifikat-halal')->group(function () {
            Route::get('/', [ServiceController::class, 'halalCertification'])->name('service.halalcertification');
            Route::get('/daftar', [ServiceController::class, 'halalCertificationRegister'])->name('service.halalcertification.register');
            Route::post('/daftar/store', [ServiceController::class, 'halalCertificationRegisterStore'])->name('service.halalcertification.register.store');

            Route::get('/penanggung-jawab-penyelia/{pengajuanId}/create', [PenanggungJawabPenyeliaController::class, 'create'])->name('penanggung_jawab_penyelia.create');
            Route::post('/penanggung-jawab-penyelia/{pengajuanId}/store', [PenanggungJawabPenyeliaController::class, 'store'])->name('penanggung_jawab_penyelia.store');
            Route::get('/penanggung-jawab-penyelia/{id}/edit', [PenanggungJawabPenyeliaController::class, 'edit'])->name('penanggung_jawab_penyelia.edit');
            Route::patch('/penanggung-jawab-penyelia/{id}/update', [PenanggungJawabPenyeliaController::class, 'update'])->name('penanggung_jawab_penyelia.update');

            Route::get('/bahan/{pengajuanId}/create', [BahanController::class, 'create'])->name('bahan.create');
            Route::post('/bahan/{pengajuanId}/store', [BahanController::class, 'store'])->name('bahan.store');
            Route::get('/bahan/{id}/edit', [BahanController::class, 'edit'])->name('bahan.edit');
            Route::patch('/bahan/{id}/update', [BahanController::class, 'update'])->name('bahan.update');
        });

        Route::prefix('pelatihan-pendamping-halal')->group(function () {
            Route::get('/', [ServiceController::class, 'halalCompanion'])->name('service.halalcompanion');
        });

        Route::prefix('juru-sembelih-halal')->group(function () {
            Route::get('/', [ServiceController::class, 'slaughterer'])->name('service.slaughterer');
        });
    });
});

require __DIR__.'/auth.php';
