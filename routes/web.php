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

// Route::get('/', function () {
//     $heroImages = [
//         [
//             "id" => 1,
//             "title" => "Image Placeholder 1",
//             "url" => "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//         ],
//         [
//             "id" => 2,
//             "title" => "Image Placeholder 2",
//             "url" => "https://images.unsplash.com/photo-1458668383970-8ddd3927deed?q=80&w=1767&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//         ],
//         [
//             "id" => 3,
//             "title" => "Image Placeholder 3",
//             "url" => "https://images.unsplash.com/photo-1426604966848-d7adac402bff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//         ],
//         [
//             "id" => 4,
//             "title" => "Image Placeholder 4",
//             "url" => "https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//         ]
//     ];

//     $news = [
//         [
//             "publishedAt" => new DateTime('2021-01-01'),
//             "slug" => "berita-terkini-1",
//             "title" => "Berita Terkini 1",
//             "image" => "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//             "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
//         ],
//         [
//             "publishedAt" => new DateTime('2021-04-02'),
//             "slug" => "berita-terkini-2",
//             "title" => "Berita Terkini 2",
//             "image" => "https://images.unsplash.com/photo-1458668383970-8ddd3927deed?q=80&w=1767&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//             "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
//         ],
//         [
//             "publishedAt" => new DateTime('2021-05-03'),
//             "slug" => "berita-terkini-3",
//             "title" => "Berita Terkini 3",
//             "image" => "https://images.unsplash.com/photo-1426604966848-d7adac402bff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//             "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
//         ],
//         [
//             "publishedAt" => new DateTime('2021-06-04'),
//             "slug" => "berita-terkini-4",
//             "title" => "Berita Terkini 4",
//             "image" => "https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//             "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
//         ]
//     ];

//     $data = [
//         'title' => 'Dashboard',
//         'heroImages' => $heroImages,
//         'news' => $news,
//     ];

//     return view('dashboard', $data);
// });

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

// IDEA RPL [IN PROGRESS] (START)
// Route perangkat desa
// Route::get('/perangkat', function () {
//     $perangkat = [
//         [
//             "nama" => "Dwayne Johnson",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Kepala Desa",
//             "kontak" => [
//                 "instagram" => "therock",
//                 "facebook" => "DwayneJohnson",
//             ],
//             "nik" => "01234"
//         ],
//         [
//             "nama" => "Emma Watson",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Sekretaris Desa",
//             "kontak" => [
//                 "instagram" => "emmawatson",
//                 "facebook" => "emmawatson",
//             ],
//             "nik" => "01234"
//         ],
//         [
//             "nama" => "Robert Downey Jr.",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Bendahara Desa",
//             "kontak" => [
//                 "instagram" => "robertdowneyjr",
//                 "facebook" => "robertdowneyjr",
//             ],
//             "nik" => "01234"
//         ],
//         [
//             "nama" => "Scarlett Johansson",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Kepala Keamanan",
//             "kontak" => [
//                 "instagram" => "scarlett.actress",
//             ],
//             "nik" => "01234"
//         ],
//         [
//             "nama" => "Chris Evans",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Kepala Pemuda",
//             "kontak" => [
//                 "instagram" => "chrisevans",
//             ],
//             "nik" => "01234"
//         ],
//         [
//             "nama" => "Gal Gadot",
//             "gambar" => "https://picsum.photos/1920/1080",
//             "jabatan" => "Kepala Kesejahteraan",
//             "kontak" => [
//                 "instagram" => "gal_gadot",
//                 "facebook" => "GalGadot",
//             ],
//             "nik" => "01234"
//         ],
//     ];

//     $data = [
//         "perangkat" => $perangkat,
//     ];

//     return view('/tampilan/perangkat', $data);
// })->name('perangkat');
Route::get('/perangkat', [TampilanPerangkatController::class, 'index'])->name('perangkat');
Route::get('/infodesa/{jenis}', [TampilInfoContoller::class, 'index'])->name('Infodesa');
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
            "slug" => "D",
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
Route::get('/info/{title}/{id}', [TampilInfoContoller::class, 'isiinfo'])->name('info.show');

// Route detail produk
Route::get('/produk-umkm/{slug}', function ($slug) {
    return view('/tampilan/produk-umkm');
})->name('produk-umkm.show');

// Route untuk infografis (sementara)
// Nanti bisa ditambahkan controller untuk bisa membuat grafik
Route::get('/infografis', [InfoGrafisController::class, 'index'])->name('infografis');

// Route untuk profil (sementara)
// Nanti bisa ditambahkan controller untuk bisa menampilkan gambar perangkat desa
Route::get('/profil', [ProfilController::class, 'pageProfil']);

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/pengajuan', [PengajuanSuratUserController::class, 'index'])->name('pengajuan');
Route::post('/pengajuan', [PengajuanSuratUserController::class, 'store'])->name('pengajuan.store');

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
Route::get('/status', [StatusSuratController::class, 'index'])->name('status');

Route::post('/status', [StatusSuratController::class, 'dataSurat'])->name('status.check');
Route::post('/filter-surat-by-status/{id}', [StatusSuratController::class, 'filterSuratByStatus'])->name('filterSuratByStatus');
Route::delete('/pengajuan-batal/{id}', [PengajuanSuratUserController::class, 'destroy'])->name('pengajuanBatal');

// Route untuk pengajuan layanan (sementara)
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
// Route::get('/apbdes', function () {
//     return view('/tampilan/apbdes');
// });

// Route untuk produk hukum
// Nanti bisa ditambahkan controller untuk mengarahkannya dengan tujuan form
// Route::get('/produkHukum', function () {
//     return view('/tampilan/produk-hukum');
// });
Route::get('/produkHukum', [ProdukHukumController::class, 'detail'])->name('produk_hukum.detail');

// IDEA RPL [IN PROGRESS] (END)
