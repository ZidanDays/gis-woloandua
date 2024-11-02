<?php

use App\Http\Controllers\AdminGeoJsonController;
use App\Models\Perkara;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\PanduanController;
use App\Http\Controllers\LocationController;


Route::get('/', function () {
    return view  ('index', [
        'title' => 'Beranda'
    ]);
})->middleware('guest');

Route::get('/peta', function () {
    return view ('peta', [
        'title' => 'Peta'
    ]);
})->middleware('guest');

Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan')->middleware('guest');



// Route untuk proses login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk logout (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', [LocationController::class, 'index'])->name('dashboard')->middleware('auth');




Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('geosjon', AdminGeoJsonController::class);
});