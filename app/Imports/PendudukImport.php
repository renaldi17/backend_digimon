<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class PendudukImport implements ToModel, WithHeadingRow, WithUpserts
{

    /**
     * Tentukan kolom unik untuk upsert
     *
     * @return string|array
     */

    // Pake ini kalo misal ada data double tapi maunya pake data yang baru / data terakhir di insert (data paling bawah)
    public function uniqueBy()
    {
        return 'NIK'; // Kolom yang digunakan untuk mengidentifikasi data unik
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // pake ini kalo misal ada data double tapi maunya pake data yang lama / data yang pertama kali di insert (data paling atas)
        if (Penduduk::where('NIK', $row['nik'])->exists()) {
            return null;
        }

        return new Penduduk([
            'NIK' => $row['nik'],
            'No_KK' => $row['no_kk'],
            'nama' => $row['nama'],
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir']),
            'tempat_lahir' => $row['tempat_lahir'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'status' => $row['status'],
            'pekerjaan' => $row['pekerjaan'],
            'RT' => $row['rt'],
            'RW' => $row['rw'],
            'alamat' => $row['alamat'],
            'pendidikan' => $row['pendidikan'],
        ]);
    }
}
