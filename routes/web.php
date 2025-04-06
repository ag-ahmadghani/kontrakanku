<?php

use App\Models\User;
use App\Models\Penyewa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KontrakanController;
use App\Http\Controllers\PembayaranController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
});

// Route::get('/kontrakan', [KontrakanController::class, 'public_show'])->name('public');


Route::get('/kontrakans', [KontrakanController::class, 'public_show'])->name('kontrakans.index');

Route::get('/kontrakan/{id}', [KontrakanController::class, 'kontrakan_detail'])->name('kontrakan_detail');
// Route::get('kontrakan',  function () {
//     return 'Hello WOrd';
// });

// Route::get('/kontrakan/single-post', function () {
//     return view('single-post');
// });

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//admin page
// Route::get('/admin', function () {
//     return view('/admin/dashboard');
// });

// Halaman dashboard setelah login
Route::middleware('auth')->group(function () {

    Route::get('/pembayaran/{kontrakanId}/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');

    // Route::resource('pembayaran', PembayaranController::class);

    Route::middleware('role:admin')->prefix('admin')->group(function () {

        Route::get('/', [DashboardController::class, 'index']);

        Route::resource('kontrakan', KontrakanController::class);
        Route::resource('penyewa', PenyewaController::class);

        // Route::get('/data-penyewa', function () {
        //     return view('/admin/penyewa');
        // });
    });
});
