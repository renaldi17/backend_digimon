<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $produkHukums = ProdukHukum::all();

        return view('admin.produk_hukum.index', compact('produkHukums'));
    }

    public function detail()
    {
        $produkHukums = ProdukHukum::all();
        $kontaks = Kontak::limit(3)->get();

        return view('tampilan.produk-hukum', compact('produkHukums', 'kontaks'));
    }

    public function create()
    {
        return view('admin.produk_hukum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_produk' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        ProdukHukum::create($request->all());

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil dibuat.');
    }

    public function edit(ProdukHukum $produkHukum)
    {
        return view('admin.produk_hukum.edit', compact('produkHukum'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_produk' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // \dd($request);
        $produkHukum = ProdukHukum::findOrFail($id);

        Log::info('Update request data', $request->all());

        $produkHukum->update([
            'jenis_produk' => $request->jenis_produk,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil diperbarui.');
    }

    public function destroy(ProdukHukum $produkHukum)
    {
        $produkHukum->delete();

        return redirect()->route('produk_hukum.index')->with('success', 'Produk Hukum berhasil dihapus.');
    }
}
