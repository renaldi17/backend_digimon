<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PengajuanSurat;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Builder;

class StatusSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSurat = [];
        $idPenduduk = '';
        $nama = '';
        $nik = '';
        $status = "Semua";
        $kontaks = Kontak::limit(3)->get();

        return view('tampilan/status-surat', compact('dataSurat', 'idPenduduk', 'nama', 'nik', 'status', 'kontaks'));
    }

    public function dataSurat(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($validatedData->fails()) {
            return redirect('/status-surat')
                ->withErrors($validatedData)
                ->withInput();
        }

        $dataSurat = PengajuanSurat::whereHas('penduduk', function (Builder $query) use ($request) {
            $query->where('nik', $request->nik)
                ->where('nama', $request->nama)
                ->where('tanggal_lahir', $request->tanggal_lahir);
        })->with('penduduk', 'jenisSurat')->get();

        // dd($dataSurat);
        $idPenduduk = $dataSurat[0]->penduduk->id ?? "";
        $nama = $dataSurat[0]->penduduk->nama ?? "";
        $nik = $dataSurat[0]->penduduk->NIK ?? "";
        $status = "Semua";
        $kontaks = Kontak::limit(3)->get();


        // dd($nama, $nik);
        return view('tampilan/status-surat', compact('dataSurat', 'idPenduduk', 'nama', 'nik', 'status', 'kontaks'));
    }

    public function filterSuratByStatus(Request $request, $idPenduduk)
    {
        // Ambil data penduduk
        $penduduk = Penduduk::find($idPenduduk);

        if (!$penduduk) {
            // Jika penduduk tidak ditemukan, bisa mengarahkan ke halaman lain atau mengembalikan response lain
            return redirect()->back()->withErrors('Penduduk tidak ditemukan');
        }

        // Ambil query dasar
        $query = PengajuanSurat::where('penduduk_id', $idPenduduk)->with('jenisSurat');

        // Tambahkan filter status jika tidak "Semua"
        if ($request->status_surat !== 'Semua') {
            $query->where('status', $request->status_surat);
        }

        // Eksekusi query dan ambil hasilnya
        $dataSurat = $query->get();

        // Ambil nama dan NIK dari data penduduk
        $idPenduduk = $penduduk->id;
        $nama = $penduduk->nama;
        $nik = $penduduk->NIK;
        $status = $request->status_surat;

        $kontaks = Kontak::limit(3)->get();


        return view('tampilan/status-surat', compact('dataSurat', 'idPenduduk', 'nama', 'nik', 'status', 'kontaks'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
