<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

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
            'gambar_kepala_desa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'nama_kepala_desa' => 'required|string',
            'deskripsi_kepala_desa' => 'required|string',
            'video_desa' => 'nullable|mimes:mp4,avi,mkv|max:512000', // Maksimal 500MB = 500 * 1024 = 512000 KB
            'gambar_sejarah_desa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sejarah_desa' => 'required|string',
            'visi_desa' => 'required|string',
            'misi_desa' => 'required|string',
            'tujuan_desa' => 'required|string'
        ]);

        // \dd($profil->gambar_kepala_desa);
        // Upload dan simpan file video
        if ($request->hasFile('video_desa')) {
            Storage::disk('public')->delete($profil->video_desa);
            $video_desa = $request->file('video_desa')->store('profil_video', 'public');
            $validateData['video_desa'] = $video_desa;
        }

        // Proses upload gambar
        if ($request->hasFile('gambar_kepala_desa')) {
            Storage::disk('public')->delete($profil->gambar_kepala_desa);
            $gambar_kepala_desa = $request->file('gambar_kepala_desa')->store('profil_image', 'public');
            $validateData['gambar_kepala_desa'] = $gambar_kepala_desa;
        }

        Profil::where('id', $profil->id)->update($validateData);
        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function pageProfil()
    {
        $profil = Profil::first();
        $kontaks = Kontak::limit(3)->get();

        return view('profil', compact('profil', 'kontaks'));
    }
}
