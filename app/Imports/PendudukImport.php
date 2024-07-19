<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendudukImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

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
