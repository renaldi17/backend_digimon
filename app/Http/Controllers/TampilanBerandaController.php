<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Informasi;
use App\Models\Penghargaan;
use App\Models\PotensiDesa;
use App\Models\Slider;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TampilanBerandaController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah total penduduk berdasarkan jenis kelamin
        $byGender = Penduduk::select('jenis_kelamin', DB::raw('count(*) as total'))
            ->groupBy('jenis_kelamin')
            ->pluck('total', 'jenis_kelamin')
            ->toArray();

        $totalPendudukLakiLaki = $byGender['Laki-laki'] ?? 0;
        $totalPendudukPerempuan = $byGender['Perempuan'] ?? 0;
        $totalPenduduk = Penduduk::count();

        // Mengambil gambar untuk galeri (hanya 4 gambar pertama untuk ditampilkan, lebih banyak jika ingin)
        $galeriImages = Galeri::orderBy('id')->take(10)->get(); // ambil 10 gambar jika ingin lebih banyak


        $slide = Slider::orderBy('id')->get();

        // Ambil video profil
        $profil = Profil::first();
        $videoUrl = $profil->video_desa ? Storage::url($profil->video_desa) : '';

        $berita = Informasi::orderBy('tanggal')->take(6)->get();
        $penghargaan = Penghargaan::orderBy('tanggal')->take(6)->get();
        $wisata = PotensiDesa::where('jenis', 'wisata')->orderBy('created_at')->take(6)->get();
        $produk = PotensiDesa::where('jenis', 'umkm')->orderBy('created_at')->take(6)->get();


        // Return view dengan data
        return view('dashboard', [
            'title' => 'Dashboard',
            'totalPendudukLakiLaki' => $totalPendudukLakiLaki,
            'totalPendudukPerempuan' => $totalPendudukPerempuan,
            'totalPenduduk' => $totalPenduduk,
            'galeriImages' => $galeriImages,
            'videoUrl' => $videoUrl,
            'berita' => $berita,
            'penghargaan' => $penghargaan,
            'wisata' => $wisata,
            'produk' => $produk,
            'slide' => $slide,
        ]);
    }
}
