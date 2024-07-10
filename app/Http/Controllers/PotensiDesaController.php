<?php

namespace App\Http\Controllers;

use App\Models\PotensiDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PotensiDesaController extends Controller
{
    public function index()
    {
        $potensiDesas = PotensiDesa::all();
        return view('potensi_desa.index', compact('potensiDesas'));
    }

    public function create()
    {
        return view('potensi_desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|in:umkm,wisata',
            'gambar' => 'image|nullable',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'hari_buka' => 'required|string',
            'hari_tutup' => 'required|string',
            'buka' => 'required|date_format:H:i',
            'tutup' => 'required|date_format:H:i',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('potensi_desa', 'public') : null;

        PotensiDesa::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'hari_buka' => $request->hari_buka,
            'hari_tutup' => $request->hari_tutup,
            'buka' => $request->buka,
            'tutup' => $request->tutup,
        ]);

        return redirect()->route('potensi_desa.index')->with('success', 'Potensi Desa berhasil dibuat.');
    }

    public function edit(PotensiDesa $potensiDesa)
    {
        return view('potensi_desa.edit', compact('potensiDesa'));
    }

    public function update(Request $request, PotensiDesa $potensiDesa)
    {
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|in:umkm,wisata',
            'gambar' => 'image|nullable',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'hari_buka' => 'required|string',
            'hari_tutup' => 'required|string',
            'buka' => 'required|date_format:H:i',
            'tutup' => 'required|date_format:H:i',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('potensi_desa', 'public');
            Storage::disk('public')->delete($potensiDesa->gambar);
            $potensiDesa->update(['gambar' => $gambarPath]);
        }

        $potensiDesa->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'hari_buka' => $request->hari_buka,
            'hari_tutup' => $request->hari_tutup,
            'buka' => $request->buka,
            'tutup' => $request->tutup,
        ]);

        return redirect()->route('potensi_desa.index')->with('success', 'Potensi Desa berhasil diperbaharui.');
    }

    public function destroy(PotensiDesa $potensiDesa)
    {
        Storage::disk('public')->delete($potensiDesa->gambar);
        $potensiDesa->delete();

        return redirect()->route('potensi_desa.index')->with('success', 'Potensi Desa berhasil dihapus.');
    }
}
