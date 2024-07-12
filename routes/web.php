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

Route::get('/', function () {
    $heroImages = [
        [
            "id" => 1,
            "title" => "Image Placeholder 1",
            "url" => "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        ],
        [
            "id" => 2,
            "title" => "Image Placeholder 2",
            "url" => "https://images.unsplash.com/photo-1458668383970-8ddd3927deed?q=80&w=1767&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        ],
        [
            "id" => 3,
            "title" => "Image Placeholder 3",
            "url" => "https://images.unsplash.com/photo-1426604966848-d7adac402bff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        ],
        [
            "id" => 4,
            "title" => "Image Placeholder 4",
            "url" => "https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        ]
    ];

    $news = [
        [
            "publishedAt" => new DateTime('2021-01-01'),
            "slug" => "berita-terkini-1",
            "title" => "Berita Terkini 1",
            "image" => "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-04-02'),
            "slug" => "berita-terkini-2",
            "title" => "Berita Terkini 2",
            "image" => "https://images.unsplash.com/photo-1458668383970-8ddd3927deed?q=80&w=1767&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-05-03'),
            "slug" => "berita-terkini-3",
            "title" => "Berita Terkini 3",
            "image" => "https://images.unsplash.com/photo-1426604966848-d7adac402bff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-06-04'),
            "slug" => "berita-terkini-4",
            "title" => "Berita Terkini 4",
            "image" => "https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
        ]
    ];

    $data = [
        'title' => 'Dashboard',
        'heroImages' => $heroImages,
        'news' => $news,
    ];

    return view('dashboard', $data);
});

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

// IDEA RPL [IN PROGRESS] (START)
Route::get('/tampilan/detail-produk', function () {
    return view('/tampilan/detail-produk');
});

Route::get('/tampilan/potensi-desa', function () {
    return view('/tampilan/potensi-desa');
});

Route::get('/tampilan/detail-wisata', function () {
    return view('/tampilan/detail-wisata');
});

// Route buat detail wisata
Route::get('/detail-wisata', function () {
    return view('detail-wisata');
});

// Route untuk infografis (sementara)
// Nanti bisa ditambahkan controller untuk bisa membuat grafik
Route::get('/infografis', function () {
    return view('infografis');
});


// Route untuk profil (sementara)
// Nanti bisa ditambahkan controller untuk bisa menampilkan gambar perangkat desa
Route::get('/profil', function () {
    return view('profil');
});
// IDEA RPL [IN PROGRESS] (END)
