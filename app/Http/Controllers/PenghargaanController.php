<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenghargaanController extends Controller
{
    public function index()
    {
        $penghargaans = Penghargaan::all();
        return view('admin.penghargaan.index', compact('penghargaans'));
    }

    public function create()
    {
        return view('admin.penghargaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'image|nullable',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('penghargaan', 'public') : null;

        Penghargaan::create([
            'judul' => $request->judul,
            'gambar' => $gambarPath,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('penghargaan.index')->with('success', 'Penghargaan berhasil dibuat.');
    }

    public function edit(Penghargaan $penghargaan)
    {
        return view('admin.penghargaan.edit', compact('penghargaan'));
    }

    public function update(Request $request, Penghargaan $penghargaan)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'image|nullable',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('penghargaan', 'public');
            Storage::disk('public')->delete($penghargaan->gambar);
            $penghargaan->update(['gambar' => $gambarPath]);
        }

        $penghargaan->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('penghargaan.index')->with('success', 'Penghargaan berhasil diperbaharui.');
    }

    public function destroy(Penghargaan $penghargaan)
    {
        Storage::disk('public')->delete($penghargaan->gambar);
        $penghargaan->delete();

        return redirect()->route('penghargaan.index')->with('success', 'Penghargaan berhasil dihapus.');
    }
}
