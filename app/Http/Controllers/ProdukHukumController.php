<?php

namespace App\Http\Controllers;

use App\Models\ProdukHukum;
use Illuminate\Http\Request;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $produkHukums = ProdukHukum::all();
        return view('produk_hukum.index', compact('produkHukums'));
    }

    public function create()
    {
        return view('produk_hukum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_produk' => 'required|in:Hukum Desa,Hukum Kepala Desa',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        ProdukHukum::create($request->all());

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil dibuat.');
    }

    public function edit(ProdukHukum $produkHukum)
    {
        return view('produk_hukum.edit', compact('produkHukum'));
    }

    public function update(Request $request, ProdukHukum $produkHukum)
    {
        $request->validate([
            'jenis_produk' => 'required|in:Hukum Desa,Hukum Kepala Desa',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $produkHukum->update($request->all());

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil diperbaharui.');
    }

    public function destroy(ProdukHukum $produkHukum)
    {
        $produkHukum->delete();

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil dihapus.');
    }
}
