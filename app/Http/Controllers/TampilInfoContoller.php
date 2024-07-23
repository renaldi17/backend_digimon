<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoTampilan;
use App\Models\Kontak;
use Illuminate\Support\Facades\Crypt;


class TampilInfoContoller extends Controller
{
    public function index($jenis)
    {
        if ($jenis == 'wisata') {
            $title = "Wisata";
            $subtitle = "Tegalmanggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = '26%';
            $data = InfoTampilan::GetPotensi('wisata');
        } else if ($jenis == 'produk') {
            $title = "Produk";
            $subtitle = "Tidak hanya wisata alam yang banyak, Tegal Manggung memiliki kekayaan alam juga yang melimpah.";
            $jarak = '25%';
            $data = InfoTampilan::GetPotensi('umkm');
        }
        if ($jenis == 'berita') {
            $title = "Berita";
            $subtitle = "Tegal Manggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = '25%';
            $data = InfoTampilan::GetInfo('informasis');
        } else if ($jenis == 'penghargaan') {
            $title = "Penghargaan";
            $subtitle = "Tegal Manggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = '40%';
            $data = InfoTampilan::GetInfo('penghargaans');
        }

        $kontaks = Kontak::limit(3)->get();


        return view('tampilan/potensi', compact('title', 'subtitle', 'data', 'jarak', 'jenis', 'kontaks'));
    }
    public function isiinfo($jenis, $encrpt)
    {
        $id = Crypt::decryptString($encrpt);

        if ($jenis == 'Wisata') {
            $data = InfoTampilan::GetPotensiById($id);
        } else if ($jenis == 'Produk') {
            $data = InfoTampilan::GetPotensiById($id);
        }
        if ($jenis == 'Berita') {
            $data = InfoTampilan::GetInfoById('informasis', $id);
        } else if ($jenis == 'Penghargaan') {
            $data = InfoTampilan::GetInfoById('penghargaans', $id);
        }
        $kontaks = Kontak::limit(3)->get();

        return view('tampilan/tampilInfo', compact('data', 'jenis', 'kontaks'));
    }
}
