<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('kontak.index', compact('kontaks'));
    }

    public function create()
    {
        return view('kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nomor_telepon' => 'required|string',
            'email' => 'required|email|unique:kontaks,email',
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dibuat.');
    }

    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'nama' => 'required|string',
            'nomor_telepon' => 'required|string',
            'email' => 'required|email|unique:kontaks,email,'.$kontak->id,
        ]);

        $kontak->update($request->all());

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil diperbaharui.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
