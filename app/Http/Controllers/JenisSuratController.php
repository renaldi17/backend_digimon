<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JenisSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisSurat = JenisSurat::all();

        return view('admin.jenis_surat.index', compact('jenisSurat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis_surat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_surat' => 'required|unique:jenis_surats,jenis_surat',
            'deskripsi' => 'required',
        ]);

        JenisSurat::create([
            'jenis_surat' => $validatedData['jenis_surat'],
            'deskripsi' => $validatedData['deskripsi'],
        ]);

        return redirect()->route('jenisSurat.index')
            ->with('success', 'Data Jenis Surat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisSurat $jenisSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisSurat $jenisSurat)
    {
        return view('admin.jenis_surat.edit', compact('jenisSurat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisSurat $jenisSurat)
    {
        $validatedData = $request->validate([
            'jenis_surat' => 'required|unique:jenis_surats,jenis_surat,' . $jenisSurat->id,
            'deskripsi' => 'required',
        ]);

        $jenisSurat->update($validatedData);

        return redirect()->route('jenisSurat.index')
            ->with('success', 'Data Jenis Surat berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisSurat $jenisSurat)
    {
        $pengajuanSurat = PengajuanSurat::where('jenis_surat_id', $jenisSurat->id)->get();
        foreach($pengajuanSurat as $pengajuan) {
            Storage::disk('public')->delete($pengajuan->ktp);
            Storage::disk('public')->delete($pengajuan->kk);
            Storage::disk('public')->delete($pengajuan->pengantar_rt_rw);
            $pengajuan->delete();
        }

        $jenisSurat->delete();

        return redirect()->route('jenisSurat.index')
            ->with('success', 'Data Jenis Surat berhasil dihapus.');
    }
}
