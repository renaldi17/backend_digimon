<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\PerangkatDesa;
use App\Models\Struktur;
use Illuminate\Http\Request;

class TampilanPerangkatController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = PerangkatDesa::query();

        if ($search) {
            $query->where('nama', 'like', "%{$search}%")
                ->orWhere('jabatan', 'like', "%{$search}%");
        }

        $perangkatDesas = $query->paginate(8);
        $strukturs = Struktur::first(); // Mengambil satu entri pertama Struktur
        $kontaks = Kontak::limit(3)->get();


        return view('tampilan.perangkat', compact('perangkatDesas', 'strukturs', 'search', 'kontaks'));
    }
}
