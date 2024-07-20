<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penduduk;

class InfoGrafisController extends Controller
{
    public function index() {
        $byGender = Penduduk::select('jenis_kelamin', DB::raw('count(*) as total'))->groupBy('jenis_kelamin')->pluck('total', 'jenis_kelamin')->toArray();

        $byEdu = Penduduk::select('pendidikan', DB::raw('count(*) as total'))->groupBy('pendidikan')->pluck('total', 'pendidikan')->toArray();

        // $byJob = Penduduk::select('pekerjaan', DB::raw('count(*) as total'))->groupBy('pendidikan')->pluck('total', 'pendidikan')->toArray();

        $totalPenduduk = Penduduk::count();

        $pendudukCountsByGender = (object) $byGender;
        $pendudukCountsByEdu = (object) $byEdu;

        // dd($pendudukCountsByEdu);
        return view('infografis', compact('pendudukCountsByGender', 'pendudukCountsByEdu', 'totalPenduduk'));
    }
}
