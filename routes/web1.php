<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Models\Perkara;

// Route untuk menampilkan form login (GET)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login (POST)
Route::post('/login', [AuthController::class, 'login']);

// Route untuk logout (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





//route halaman forms
// Route::get('/forms', [FormsController::class, 'ShowPageForms'])->name('forms-page');
Route::get('/forms', [FormsController::class, 'ShowPageForms'])
    ->middleware('auth')
    ->name('form.view');


//route create/add forms
Route::post('/forms', [FormsController::class, 'store'])->name('form.store');





//dashboard
// Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');

// Route untuk halaman dashboard, hanya bisa diakses oleh pengguna yang terautentikasi
// Route::get('/dashboard', function () {
//     return view('dashboard'); // Pastikan view 'dashboard' sudah ada
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', function () {
    $perkaras = \App\Models\Perkara::all(); // Menggunakan namespace penuh untuk model
    return view('dashboard', compact('perkaras')); // Menggunakan compact() untuk mengirim variabel ke view
})->middleware('auth')->name('dashboard');