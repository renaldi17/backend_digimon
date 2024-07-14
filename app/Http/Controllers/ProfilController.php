<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = Profil::first();
        return view("admin.profil_desa.index", compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profil = Profil::Where('id', $id)->first();
        return view('admin.profil_desa.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        
        $validateData = $request->validate([
            'gambar_kepala_desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_kepala_desa' => 'required|string',
            'deskripsi_kepala_desa' => 'required|string',
            'gambar_perangkat_desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_sejarah_desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sejarah_desa' => 'required|string',
            'visi_desa' => 'required|string',
            'misi_desa' => 'required|string',
            'tujuan_desa' => 'required|string'
        ]);
        //dd($validateData['gambar_kepala_desa']);
        if ($request->hasFile('gambar_kepala_desa')) {
            $gambar_kepala_desa = $request->file('gambar_kepala_desa')->store('public/profil_images/kepala_desa');
            $validateData['gambar_kepala_desa'] = $gambar_kepala_desa;
        }

        if ($request->hasFile('gambar_perangkat_desa')) {
            $gambar_perangkat_desa = $request->file('gambar_perangkat_desa')->store('public/profil_images/perangkat_desa');
            $validateData['gambar_perangkat_desa'] = $gambar_perangkat_desa;
        }

        if ($request->hasFile('gambar_sejarah_desa')) {
            $gambar_sejarah_desa = $request->file('gambar_sejarah_desa')->store('public/profil_images/sejarah_desa');
            $validateData['gambar_sejarah_desa'] = $gambar_sejarah_desa;
        }

        Profil::where('id', $profil->id)->update($validateData);
        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function pageProfil() {
        $profil = Profil::first();
        return view('profil', compact('profil'));
    }

}
