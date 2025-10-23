<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // Pastikan baris ini ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk CRUD Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);