<?php

use App\Livewire\UserLinks;
use App\Livewire\ShortenUrl;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/dashboard', UserLinks::class)
    ->middleware('auth')
    ->name('dashboard');

    Route::get('/', ShortenUrl::class)->name('shorten.url')->middleware('auth');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
