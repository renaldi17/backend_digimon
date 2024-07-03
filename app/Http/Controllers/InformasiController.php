<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::all();
        return view('informasi.index', compact('informasis'));
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'jenis' => 'required|in:berita,pengumuman,agenda,apb',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('informasi', 'public');
        }

        Informasi::create([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dibuat.');
    }

    public function edit(Informasi $informasi)
    {
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|string',
            'jenis' => 'required|in:berita,pengumuman,agenda,apb',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('informasi', 'public');
            Storage::disk('public')->delete($informasi->gambar);
            $informasi->update(['gambar' => $gambarPath]);
        }

        $informasi->update([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbaharui.');
    }

    public function destroy(Informasi $informasi)
    {
        Storage::disk('public')->delete($informasi->gambar);
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus.');
    }
}
