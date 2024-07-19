<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PengajuanSurat;
use Illuminate\Support\Facades\Storage;
use Excel;
use App\Imports\PendudukImport;
use Carbon\Carbon;

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
        $pengajuanSurat = PengajuanSurat::where('penduduk_id', $penduduk->id)->get();
        foreach($pengajuanSurat as $pengajuan) {
            Storage::disk('public')->delete($pengajuan->ktp);
            Storage::disk('public')->delete($pengajuan->kk);
            Storage::disk('public')->delete($pengajuan->pengantar_rt_rw);
            $pengajuan->delete();
        }
        $penduduk->delete();

        return redirect()->route('penduduk.index')
            ->with('success', 'Data penduduk berhasil dihapus.');
    }

    public function import() {
        return view('admin.penduduk.import');
    }

    public function importProcess(Request $request) {
        
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        // dd($request->all());

        // $path = $request->file('file')->getRealPath();
        // $data = Excel::toArray([], $path);

        // dd($data);

        Excel::import(new PendudukImport, $request->file('file'));

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diimport.');

    }

    /**
     * Mengekspor data penduduk ke dalam file Excel dengan tanggal dan waktu
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export() 
    {
        $timestamp = Carbon::now()->format('Ymd_His');
        $fileName = 'data-penduduk-' . $timestamp . '.xlsx';

        return Excel::download(new PendudukExport, $fileName);
    }
}
