<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use App\Models\JenisSurat;
use App\Models\Kontak;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Closure;

class PengajuanSuratUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisSurat = JenisSurat::all();
        $kontaks = Kontak::limit(3)->get();

        return view('/tampilan/pengajuan-layanan', compact('jenisSurat', 'kontaks'));
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

        $messages = [
            'required' => ':attribute wajib diisi.',
            'numeric' => ':attribute harus berupa angka.',
            'digits' => ':attribute harus terdiri dari :digits digit.',
            'date' => ':attribute harus berupa tanggal.',
            'max' => ':attribute maksimal 2048 kb atau 2 mb.',
            'mimes' => ':attribute harus berupa pdf.',

        ];

        $validator = Validator::make($request->all(), [
            'jenis_surat_id' => 'required',
            'nik' => [
                'required', 'numeric', 'digits:16',
                // function (string $attribute, mixed $value, Closure $fail){
                //     if(Penduduk::where('NIK', $value)->doesntExist()){
                //         $fail('NIK tidak ditemukan');
                //     }
                // }
            ],
            'tanggal_lahir' => 'required|date',
            'nama' => 'required|string',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'catatan' => 'nullable|string',
            'ktp' => ['required', 'max:2048', 'mimes:pdf'],
            'kk' => ['required', 'max:2048', 'mimes:pdf'],
            'pengantar_rt_rw' => ['required', 'max:2048', 'mimes:pdf'],
        ], $messages, [
            'jenis_surat_id' => 'Jenis Surat',
            'nik' => 'NIK',
            'tanggal_lahir' => 'Tanggal Lahir',
            'rt' => 'RT',
            'rw' => 'RW',
            'ktp' => 'KTP',
            'kk' => 'KK',
            'pengantar_rt_rw' => 'Pengantar RT/RW',
        ]);

        // dd($validator);

        if ($validator->fails()) {
            return redirect(route('pengajuan'))
                ->withErrors($validator)
                ->withInput();
        }

        $penduduk = Penduduk::where('NIK', $request->nik)->where('tanggal_lahir', $request->tanggal_lahir)->where('nama', $request->nama)->first();

        if ($penduduk == null) {
            // dd($penduduk);
            return redirect(route('pengajuan'))
                ->withErrors(['nik' => 'NIK tidak ditemukan'])
                ->with('error_nik', 'Data Penduduk Tidak Ditemukan!')
                ->withInput();
        }

        $ktp = $request->file('ktp')->store('pengajuan_surat/ktp', 'public');
        $kk = $request->file('kk')->store('pengajuan_surat/kk', 'public');
        $pengantar_rt_rw = $request->file('pengantar_rt_rw')->store('pengajuan_surat/pengantar_rt_rw', 'public');

        PengajuanSurat::create([
            'penduduk_id' => $penduduk->id,
            'jenis_surat_id' => $request->jenis_surat_id,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'catatan' => $request->catatan,
            'ktp' => $ktp,
            'kk' => $kk,
            'pengantar_rt_rw' => $pengantar_rt_rw
        ]);

        return redirect(route('status'))->with('success', 'Berhasil melakukan pengajuan surat, silahkan menunggu pengecekan dari admin.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanSurat $pengajuanSurat)
    {
        //
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
    public function destroy($id)
    {
        $pengajuanSurat = PengajuanSurat::find($id);

        if ($pengajuanSurat) {
            Storage::disk('public')->delete($pengajuanSurat->ktp);
            Storage::disk('public')->delete($pengajuanSurat->kk);
            Storage::disk('public')->delete($pengajuanSurat->pengantar_rt_rw);
            $pengajuanSurat->delete();
        }

        $dataSurat = [];
        $idPenduduk = '';
        $nama = '';
        $nik = '';
        $status = "Semua";
        $kontaks = Kontak::limit(3)->get();

        return view('tampilan/status-surat', compact('dataSurat', 'idPenduduk', 'nama', 'nik', 'status', 'kontaks'));
    }
}
