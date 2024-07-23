<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuanSurat = PengajuanSurat::with('penduduk', 'jenisSurat')->get();
        return view('/admin/pengajuan_surat/index', compact('pengajuanSurat'));
    }

    public function updateStatusPage($id)
    {
        $status = ['Diajukan', 'Disetujui', 'Ditolak'];
        $pengajuanSurat = PengajuanSurat::with('penduduk', 'jenisSurat')->where('id', $id)->get()->first();
        return view('/admin/pengajuan_surat/update-status', compact('pengajuanSurat', 'status'));
    }

    public function updateStatus($id, Request $request)
    {
        $pengajuanSurat = PengajuanSurat::find($id);
        // \dd($request->balasan);
        $pengajuanSurat->status = $request->status;
        $pengajuanSurat->tanggal_pengambilan = now();
        $pengajuanSurat->alasan = $request->alasan;
        if ($request->hasFile('balasan')) {
            $filePath = $request->file('balasan')->store('file_balasan', 'public');
            Storage::disk('public')->delete($request->balasan);
            $pengajuanSurat->file_balasan = $filePath;
        }
        $pengajuanSurat->save();
        return redirect()->route('pengajuanSurat.index')->with('success', 'Pengajuan surat berhasil diubah.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanSurat $pengajuanSurat)
    {
        $pengajuanSurat = PengajuanSurat::with('penduduk', 'jenisSurat')->where('id', $pengajuanSurat->id)->get()->first();
        return view('/admin/pengajuan_surat/show', compact('pengajuanSurat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengajuanSurat $pengajuanSurat)
    {
        Storage::disk('public')->delete($pengajuanSurat->ktp);
        Storage::disk('public')->delete($pengajuanSurat->kk);
        Storage::disk('public')->delete($pengajuanSurat->pengantar_rt_rw);
        $pengajuanSurat->delete();
        return redirect()->route('pengajuanSurat.index')->with('success', 'Pengajuan surat berhasil dihapus.');
    }
}
