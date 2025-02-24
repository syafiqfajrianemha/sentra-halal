<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMenuController;
use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/beranda', 301);

Route::get('/beranda', [HomeController::class, 'index'])->name('home.index');
Route::get('/profil/tentang-sentra-halal', [ProfileMenuController::class, 'about'])->name('profile.about');
Route::get('/profil/visi-misi', [ProfileMenuController::class, 'visionMission'])->name('profile.visionmission');
Route::get('/profil/struktur-organisasi', [ProfileMenuController::class, 'organizationStructure'])->name('profile.organizationstructure');

Route::middleware(['auth', 'verified', RoleCheck::class.':admin'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', RoleCheck::class.':admin,user'])->group(function () {
    //
});

require __DIR__.'/auth.php';
