<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Galeri;
use App\Models\Profil;
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
    
        // Data gambar hero
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
    
        // Data berita
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
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
            ]
        ];
    
        // Ambil video profil
        $profil = Profil::first();
        $videoUrl = $profil->video_desa ? Storage::url($profil->video_desa) : '';
    
        // Return view dengan data
        return view('dashboard', [
            'title' => 'Dashboard',
            'heroImages' => $heroImages,
            'news' => $news,
            'totalPendudukLakiLaki' => $totalPendudukLakiLaki,
            'totalPendudukPerempuan' => $totalPendudukPerempuan,
            'totalPenduduk' => $totalPenduduk,
            'galeriImages' => $galeriImages,
            'videoUrl' => $videoUrl,
        ]);
    }    
}
