<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// TODO: daftarkan route ke controller anda disini

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', [Profile::class, 'edit'])->name('settings.profile');
    Route::patch('settings/profile', [Profile::class, 'update'])->name('settings.profile.update');
    Route::get('settings/password', [Password::class, 'edit'])->name('settings.password');
    Route::patch('settings/password', [Password::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Appearance::class, 'edit'])->name('settings.appearance');
    Route::patch('settings/appearance', [Appearance::class, 'update'])->name('settings.appearance.update');
});

// TODO: daftarkan route ke controller buku anda disini
Route::resource('buku', BukuController::class);

require __DIR__.'/auth.php';
