<?php

namespace App\Http\Controllers;

use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $produks = ProdukHukum::all();
        return view('produk_hukum.index', compact('produks'));
    }

    public function create()
    {
        return view('produk_hukum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_produk' => 'required|in:Peraturan Desa,Peraturan Kepala Desa',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        ProdukHukum::create($request->all());

        return redirect()->route('produkhukum.index')->with('success', 'Produk Hukum berhasil dibuat.');
    }

    public function edit(ProdukHukum $produkhukum)
    {
        return view('produk_hukum.edit', compact('produkhukum'));
    }

    public function update(Request $request, ProdukHukum $produkhukum)
    {
        $request->validate([
            'jenis_produk' => 'required|in:Peraturan Desa,Peraturan Kepala Desa',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $produkhukum->update($request->all());

        return redirect()->route('produkhukum.index')->with('success', 'Produk Hukum berhasil diperbaharui.');
    }

    public function destroy(ProdukHukum $produkhukum)
    {
        $produkhukum->delete();

        return redirect()->route('produkhukum.index')->with('success', 'Produk Hukum berhasil dihapus.');
    }
}
