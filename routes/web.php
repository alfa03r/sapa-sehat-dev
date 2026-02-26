<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'index'])->name('home');
Route::get('/tentang-kami',[PublicController::class, 'about'])->name('about');

Route::get('/kontak',[PublicController::class, 'contact'])->name('contact');

Route::get('/kegiatan',[PublicController::class, 'events'])->name('events.index');
Route::get('/kegiatan/{slug}',[PublicController::class, 'showEvents'])->name('events.show');