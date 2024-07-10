@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Penduduk</div>

                <div class="card-body">
                    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="NIK">NIK:</label>
                            <input type="text" name="NIK" id="NIK" class="form-control" value="{{ $penduduk->NIK }}" required>
                        </div>
                        <div class="form-group">
                            <label for="No_KK">No. KK:</label>
                            <input type="text" name="No_KK" id="No_KK" class="form-control" value="{{ $penduduk->No_KK }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $penduduk->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $penduduk->tanggal_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir:</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $penduduk->tempat_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki" {{ $penduduk->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $penduduk->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Belum Kawin" {{ $penduduk->status == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                <option value="Kawin" {{ $penduduk->status == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                <option value="Cerai Hidup" {{ $penduduk->status == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                <option value="Cerai Mati" {{ $penduduk->status == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan:</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ $penduduk->pekerjaan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="RT">RT:</label>
                            <input type="text" name="RT" id="RT" class="form-control" value="{{ $penduduk->RT }}" required>
                        </div>
                        <div class="form-group">
                            <label for="RW">RW:</label>
                            <input type="text" name="RW" id="RW" class="form-control" value="{{ $penduduk->RW }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ $penduduk->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan:</label>
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                <option value="SD" {{ $penduduk->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SMP" {{ $penduduk->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                <option value="SMA" {{ $penduduk->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
                                <option value="Diploma" {{ $penduduk->pendidikan == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                <option value="S1" {{ $penduduk->pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ $penduduk->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ $penduduk->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                                <option value="Putus Sekolah" {{ $penduduk->pendidikan == 'Putus Sekolah' ? 'selected' : '' }}>Putus Sekolah</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
