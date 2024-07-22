<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PotensiDesaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PengajuanSuratUserController;
use App\Http\Controllers\StatusSuratController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\InfoGrafisController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TampilanBerandaController;
use App\Http\Controllers\TampilanPerangkatController;
use App\Http\Controllers\TampilInfoContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;


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


Route::get('/', [TampilanBerandaController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/penduduk/import', [PendudukController::class, 'import'])->name('penduduk.import');
    Route::post('/admin/penduduk/import', [PendudukController::class, 'importProcess'])->name('penduduk.importProcess');
    Route::get('/admin/penduduk/export', [PendudukController::class, 'export'])->name('penduduk.export');

    Route::resource('admin/galeri', GaleriController::class);
    Route::resource('admin/slider', SliderController::class);
    Route::resource('admin/kontak', KontakController::class);
    Route::resource('admin/perangkat_desa', PerangkatDesaController::class);
    Route::resource('admin/informasi', InformasiController::class);
    Route::resource('admin/penghargaan', PenghargaanController::class);
    Route::resource('admin/potensi_desa', PotensiDesaController::class);
    Route::resource('admin/users', UserController::class);
    Route::get('admin/profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::resource('admin/produk_hukum', ProdukHukumController::class);
    Route::resource('admin/struktur', StrukturController::class);
    Route::resource('admin/penduduk', PendudukController::class);

    Route::resource('admin/jenis-surat', JenisSuratController::class)->names([
        'index' => 'jenisSurat.index',
        'create' => 'jenisSurat.create',
        'store' => 'jenisSurat.store',
        'show' => 'jenisSurat.show',
        'edit' => 'jenisSurat.edit',
        'update' => 'jenisSurat.update',
        'destroy' => 'jenisSurat.destroy'
    ]);
    Route::resource('admin/pengajuan-surat', PengajuanSuratController::class)->names([
        'index' => 'pengajuanSurat.index',
        'create' => 'pengajuanSurat.create',
        'store' => 'pengajuanSurat.store',
        'show' => 'pengajuanSurat.show',
        'edit' => 'pengajuanSurat.edit',
        'update' => 'pengajuanSurat.update',
        'destroy' => 'pengajuanSurat.destroy'
    ]);
    Route::get('admin/pengajuan-surat/ubah-status/{id}', [PengajuanSuratController::class, 'updateStatusPage'])->name('pengajuanSurat.updateStatus.index');
    Route::put('admin/pengajuan-surat/ubah-status/{id}', [PengajuanSuratController::class, 'updateStatus'])->name('pengajuanSurat.updateStatus.update');
    Route::resource('admin/profil', ProfilController::class)->except('create', 'store', 'show', 'destroy');
});
//AUTH//

// Route for registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Route for login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Route for logout (optional)
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/perangkat', [TampilanPerangkatController::class, 'index'])->name('perangkat');
Route::get('/infodesa/{jenis}', [TampilInfoContoller::class, 'index'])->name('Infodesa');

Route::get('/info/{title}/{id}', [TampilInfoContoller::class, 'isiinfo'])->name('info.show');


Route::get('/infografis', [InfoGrafisController::class, 'index'])->name('infografis');

Route::get('/profil', [ProfilController::class, 'pageProfil']);

Route::get('/pengajuan', [PengajuanSuratUserController::class, 'index'])->name('pengajuan');
Route::post('/pengajuan', [PengajuanSuratUserController::class, 'store'])->name('pengajuan.store');

Route::get('/status', [StatusSuratController::class, 'index'])->name('status');

Route::post('/status', [StatusSuratController::class, 'dataSurat'])->name('status.check');
Route::post('/filter-surat-by-status/{id}', [StatusSuratController::class, 'filterSuratByStatus'])->name('filterSuratByStatus');
Route::delete('/pengajuan-batal/{id}', [PengajuanSuratUserController::class, 'destroy'])->name('pengajuanBatal');

Route::get('/produkHukum', [ProdukHukumController::class, 'detail'])->name('produk_hukum.detail');

// IDEA RPL [IN PROGRESS] (END)
