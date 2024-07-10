<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaController extends Controller
{
    public function index()
    {
        $perangkatDesas = PerangkatDesa::all();
        return view('perangkat_desa.index', compact('perangkatDesas'));
    }

    public function create()
    {
        return view('perangkat_desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'image|nullable',
            'jabatan' => 'required|string',
            'kontak' => 'required|string',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('perangkat_desa', 'public') : null;

        PerangkatDesa::create([
            'nama' => $request->nama,
            'gambar' => $gambarPath,
            'jabatan' => $request->jabatan,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('perangkat_desa.index')->with('success', 'Perangkat Desa berhasil dibuat.');
    }

    public function edit(PerangkatDesa $perangkatDesa)
    {
        return view('perangkat_desa.edit', compact('perangkatDesa'));
    }

    public function update(Request $request, PerangkatDesa $perangkatDesa)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'image|nullable',
            'jabatan' => 'required|string',
            'kontak' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('perangkat_desa', 'public');
            Storage::disk('public')->delete($perangkatDesa->gambar);
            $perangkatDesa->update(['gambar' => $gambarPath]);
        }

        $perangkatDesa->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('perangkat_desa.index')->with('success', 'Perangkat Desa berhasil diperbaharui.');
    }

    public function destroy(PerangkatDesa $perangkatDesa)
    {
        Storage::disk('public')->delete($perangkatDesa->gambar);
        $perangkatDesa->delete();

        return redirect()->route('perangkat_desa.index')->with('success', 'Perangkat Desa berhasil dihapus.');
    }
}
