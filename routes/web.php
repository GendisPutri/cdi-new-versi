<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    TentangKamiController,
    GaleriController,
    ProgramController,
    AfiliasiController,
    ArtikelController,
    KontakController,
    AuthController
};

// ===================
// Halaman Publik
// ===================

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/program', [ProgramController::class, 'index'])->name('program');
// routes/web.php

Route::get('/program/reguler', [ProgramController::class, 'reguler']);
Route::get('/program/corporate', [ProgramController::class, 'coorporate']);
Route::get('/program/profesi', [ProgramController::class, 'profesi']);
Route::get('/program/sertifikasi', [ProgramController::class, 'sertifikasi']);
Route::get('/program/magang', [ProgramController::class, 'magang']);


Route::get('/afiliasi', [AfiliasiController::class, 'index'])->name('afiliasi');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');

Route::get('/hubungi-kami', [KontakController::class, 'index'])->name('hubungi-kami');
Route::post('/hubungi-kami', [KontakController::class, 'kirim'])->name('hubungi-kami.kirim');

// ===================
// Authentication
// ===================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
