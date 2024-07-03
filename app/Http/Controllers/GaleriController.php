<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('galeri', 'public');
        }

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dibuat.');
    }

    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('galeri', 'public');
            Storage::disk('public')->delete($galeri->gambar);
            $galeri->update(['gambar' => $imagePath]);
        }

        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbaharui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->gambar) {
            Storage::disk('public')->delete($galeri->gambar);
        }
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
