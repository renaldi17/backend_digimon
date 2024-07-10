<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::all();
        return view('struktur.index', compact('strukturs'));
    }

    public function create()
    {
        return view('struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Handle file upload if provided
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/struktur_images');
        }

        Struktur::create([
            'nama' => $request->nama,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil ditambahkan.');
    }

    public function edit(Struktur $struktur)
    {
        return view('struktur.edit', compact('struktur'));
    }

    public function update(Request $request, Struktur $struktur)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Handle file upload if provided
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/struktur_images');
            $struktur->gambar = $gambarPath;
        }

        $struktur->nama = $request->nama;
        $struktur->deskripsi = $request->deskripsi;
        $struktur->save();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diperbarui.');
    }

    public function destroy(Struktur $struktur)
    {
        $struktur->delete();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil dihapus.');
    }
}
