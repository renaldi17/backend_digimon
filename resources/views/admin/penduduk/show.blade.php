@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Detail Penduduk</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold">Detail Informasi Penduduk</h6>
                    </div>
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
