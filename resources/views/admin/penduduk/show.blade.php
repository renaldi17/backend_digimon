@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Penduduk</div>

                    <div class="card-body">
                        <p><strong>NIK:</strong> {{ $penduduk->NIK }}</p>
                        <p><strong>No. KK:</strong> {{ $penduduk->No_KK }}</p>
                        <p><strong>Nama:</strong> {{ $penduduk->nama }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $penduduk->tanggal_lahir }}</p>
                        <p><strong>Tempat Lahir:</strong> {{ $penduduk->tempat_lahir }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $penduduk->jenis_kelamin }}</p>
                        <p><strong>Status:</strong> {{ $penduduk->status }}</p>
                        <p><strong>Pekerjaan:</strong> {{ $penduduk->pekerjaan }}</p>
                        <p><strong>RT:</strong> {{ $penduduk->RT }}</p>
                        <p><strong>RW:</strong> {{ $penduduk->RW }}</p>
                        <p><strong>Alamat:</strong> {{ $penduduk->alamat }}</p>
                        <p><strong>Pendidikan:</strong> {{ $penduduk->pendidikan }}</p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
