<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktur;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = Struktur::first(); // Asumsi hanya ada satu struktur
        return view('admin.struktur.index', compact('struktur'));
    }

    public function edit($id)
    {
        $struktur = Struktur::findOrFail($id);
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $struktur = Struktur::findOrFail($id);

        $struktur->nama = $request->nama;
        $struktur->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('stuktur', 'public');
            Storage::disk('public')->delete($struktur->gambar);
            $validateData['gambar'] = $gambar;
        }
        $struktur->gambar = $gambar;

        $struktur->save();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diperbarui.');
    }
}
