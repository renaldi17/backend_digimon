<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $informasies = Informasi::all();
        return view('admin.informasi.index', compact('informasies'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'image|nullable',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('berita', 'public') : null;

        Informasi::create([
            'judul' => $request->judul,
            'gambar' => $gambarPath,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('informasi.index')->with('success', 'Berita berhasil dibuat.');
    }

    public function edit(Informasi $informasi)
    {
        return view('admin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'image|nullable',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
            Storage::disk('public')->delete($informasi->gambar);
            $informasi->update(['gambar' => $gambarPath]);
        }

        $informasi->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('informasi.index')->with('success', 'Berita berhasil diperbaharui.');
    }

    public function destroy(Informasi $informasi)
    {
        Storage::disk('public')->delete($informasi->gambar);
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'Berita berhasil dihapus.');
    }
}
