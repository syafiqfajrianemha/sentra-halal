<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutionController;
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

Route::get('/layanan/pengajuan-sertifikasi-halal', [ServiceController::class, 'halalCertification'])->name('service.halalcertification');
Route::get('/layanan/pelatihan-pendamping-halal', [ServiceController::class, 'halalCompanion'])->name('service.halalcompanion');
Route::get('/layanan/juru-sembelih-halal', [ServiceController::class, 'slaughterer'])->name('service.slaughterer');

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
    //
});

require __DIR__.'/auth.php';
