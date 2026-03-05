<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\MengenaiSamsatCeriaController;
use App\Http\Controllers\TutorialController;
use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Middleware\ThrottleRequests;

// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Tutorial
Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial.index');
Route::get('/tutorial/{page}', [TutorialController::class, 'show'])->name('tutorial.show');

// Informasi
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/', [InformasiController::class, 'index'])->name('index');
    Route::get('/close-detail', [InformasiController::class, 'closeDetail'])->name('close-detail');
    Route::get('/{slug}',
    [InformasiController::class, 'show'])->name('show');
});

// Hubungi Kami
Route::get('/hubungi-kami', [HubungiKamiController::class, 'index'])->name('hubungi-kami.index');
Route::post('/hubungi-kami', [HubungiKamiController::class, 'store'])
    ->middleware('throttle:5,1') // max 5x per menit per IP
    ->name('hubungi-kami.store');

// Mengenai Samsat Ceria
Route::get('/mengenai-samsat-ceria', [MengenaiSamsatCeriaController::class, 'index'])->name('mengenai-samsat.index');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
