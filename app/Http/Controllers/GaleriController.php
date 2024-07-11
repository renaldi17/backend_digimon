<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $title = 'Galeri';
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Galeri';
        return view('admin.galeri.create', compact('title'));
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
        $title = 'Edit Galeri';
        return view('admin.galeri.edit', compact('galeri', 'title'));
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
