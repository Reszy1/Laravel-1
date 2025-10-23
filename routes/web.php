<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // Pastikan baris ini ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('login');
});


// === TAMBAHKAN DUA RUTE INI ===

// 1. Rute untuk MENAMPILKAN halaman login
Route::get('/login', function () {
    return view('login');
})->name('login.show'); // Kita beri nama 'login.show'

// 2. Rute untuk MEMPROSES data login
//    Setelah "login", kita langsung redirect ke halaman mahasiswa
Route::post('/login-process', function () {
    
    // Di aplikasi nyata, kamu akan validasi email/password di sini
    // Untuk saat ini, kita langsung redirect saja

    return redirect()->route('mahasiswa.index');

})->name('login.process'); // Kita beri nama 'login.process'


// === RUTE CRUD MAHASISWA (Sudah ada) ===
Route::resource('mahasiswa', MahasiswaController::class);
