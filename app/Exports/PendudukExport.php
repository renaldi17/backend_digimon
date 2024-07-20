<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Penduduk::all();
    }

    /**
     * Mendefinisikan header kolom
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'NIK',
            'No KK',
            'Nama',
            'Tanggal Lahir',
            'Tempat Lahir',
            'Jenis Kelamin',
            'Status',
            'Pekerjaan',
            'RT',
            'RW',
            'Alamat',
            'Pendidikan',
            'Created At',
            'Updated At',
        ];
    }
}
