<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaController extends Controller
{
    public function index()
    {
        $title = 'Sarana';
        $saranas = Sarana::all();
        return view('admin.sarana.index', compact('saranas', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Sarana';
        return view('admin.sarana.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'jumlah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svf|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('sarana', 'public');
        }

        Sarana::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('sarana.index')->with('success', 'Sarana berhasil dibuat.');
    }

    public function edit(Sarana $sarana)
    {
        $title = 'Edit Sarana';
        return view('admin.sarana.edit', compact('sarana', 'title'));
    }

    public function update(Request $request, Sarana $sarana)
    {
        $request->validate([
            'nama' => 'required|string',
            'jumlah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('sarana', 'public');
            if ($sarana->gambar) {
                Storage::disk('public')->delete($sarana->gambar);
            }
            $sarana->gambar = $imagePath;
        }

        $sarana->update([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'gambar' => $sarana->gambar,
        ]);

        return redirect()->route('sarana.index')->with('success', 'Sarana berhasil diperbaharui.');
    }

    public function destroy(Sarana $sarana)
    {
        if ($sarana->gambar) {
            Storage::disk('public')->delete($sarana->gambar);
        }
        $sarana->delete();

        return redirect()->route('sarana.index')->with('success', 'Sarana berhasil dihapus.');
    }
}
