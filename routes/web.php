<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PotensiDesaController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PendudukController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('admin', function () {
    return view('admin.dashboard');
});
Route::resource('admin/galeri', GaleriController::class);
Route::resource('admin/slider', SliderController::class);
Route::resource('admin/kontak', KontakController::class);
Route::resource('admin/perangkat_desa', PerangkatDesaController::class);
Route::resource('admin/informasi', InformasiController::class);
Route::resource('admin/potensi_desa', PotensiDesaController::class);
Route::resource('admin/produk_hukum', ProdukHukumController::class);
Route::resource('admin/struktur', StrukturController::class);
Route::resource('admin/penduduk', PendudukController::class);

//AUTH//

// Route for registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Route for login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Route for logout (optional)
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// user tampilan
Route::get('/', function () {
    return view('tampilan.home');
});
Route::get('/infografis', function () {
    return view('tampilan.infografis');
});
