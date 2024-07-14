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
use App\Http\Controllers\ProfilController;

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
Route::resource('admin/profil', ProfilController::class)->except('create', 'store', 'show', 'destroy');

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
// Route potensi desa
Route::get('/potensi', function () {
    $wisata = [
        [
            "publishedAt" => new DateTime('2021-01-01'),
            "slug" => "tempat-wisata-1",
            "title" => "Tempat Wisata 1",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-04-02'),
            "slug" => "tempat-wisata-2",
            "title" => "Tempat Wisata 2",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-05-03'),
            "slug" => "tempat-wisata-3",
            "title" => "Tempat Wisata 3",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-06-04'),
            "slug" => "tempat-wisata-4",
            "title" => "Tempat Wisata 4",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
        ]
    ];

    $produk = [
        [
            "publishedAt" => new DateTime('2021-01-01'),
            "slug" => "produk-1",
            "title" => "Produk 1",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-04-02'),
            "slug" => "produk-2",
            "title" => "Produk 2",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-05-03'),
            "slug" => "produk-3",
            "title" => "Produk 3",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
        ],
        [
            "publishedAt" => new DateTime('2021-06-04'),
            "slug" => "produk-4",
            "title" => "Produk 4",
            "image" => "https://via.placeholder.com/400x200",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
        ]
    ];

    $data = [
        'wisata' => $wisata,
        'produk' => $produk,
    ];

    return view('/tampilan/potensi', $data);
})->name('potensi');

// Route detail wisata
Route::get('/wisata/{slug}', function ($slug) {
    return view('/tampilan/wisata');
})->name('wisata.show');

// Route detail produk
Route::get('/produk-umkm/{slug}', function ($slug) {
    return view('/tampilan/produk-umkm');
})->name('produk-umkm.show');

// Route untuk infografis (sementara)
// Nanti bisa ditambahkan controller untuk bisa membuat grafik
Route::get('/infografis', function () {
    return view('infografis');
});

// Route untuk profil (sementara)
// Nanti bisa ditambahkan controller untuk bisa menampilkan gambar perangkat desa
Route::get('/profil', [ProfilController::class, 'pageProfil']);

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/pengajuan', function () {
    return view('/tampilan/pengajuan-layanan');
});

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/status', function () {
    return view('/tampilan/status-surat');
});

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/apbdes', function () {
    return view('/tampilan/apbdes');
});

// Route untuk produk hukum
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/produkHukum', function () {
    return view('/tampilan/produk-hukum');
});
// IDEA RPL [IN PROGRESS] (END)
