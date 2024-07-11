<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('admin.penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        return view('admin.penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required|unique:penduduks,NIK',
            'No_KK' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status' => 'required|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
            'pekerjaan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required|in:SD,SMP,SMA,Diploma,S1,S2,S3,Putus Sekolah',
        ]);

        Penduduk::create($request->all());

        return redirect()->route('penduduk.index')
            ->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function show(Penduduk $penduduk)
    {
        return view('admin.penduduk.show', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('admin.penduduk.edit', compact('penduduk'));
    }

    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'NIK' => 'required|unique:penduduks,NIK,' . $penduduk->id,
            'No_KK' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status' => 'required|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
            'pekerjaan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required|in:SD,SMP,SMA,Diploma,S1,S2,S3,Putus Sekolah',
        ]);

        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')
            ->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()->route('penduduk.index')
            ->with('success', 'Data penduduk berhasil dihapus.');
    }
}
