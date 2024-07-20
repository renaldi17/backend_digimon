<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PotensiDesa;
use App\Models\ProdukHukum;
use App\Models\PengajuanSurat;


class DashboardController extends Controller
{
    public function index() {
        $penduduk = Penduduk::count();
        $potensiDesa = PotensiDesa::count();
        $produkHukum = ProdukHukum::count();
        $pengajuanSurat = PengajuanSurat::count();
        $pengajuanSuratDiproses = PengajuanSurat::where('status', 'Diajukan')->count();
        $pengajuanSuratDisetujui = PengajuanSurat::where('status', 'Disetujui')->count();
        $pengajuanSuratDitolak = PengajuanSurat::where('status', 'Ditolak')->count();

        // dd($pengajuanSuratDiproses);

        return view('admin.dashboard', compact('penduduk', 'potensiDesa', 'produkHukum', 'pengajuanSurat', 'pengajuanSuratDiproses', 'pengajuanSuratDisetujui', 'pengajuanSuratDitolak'));
    }
}
