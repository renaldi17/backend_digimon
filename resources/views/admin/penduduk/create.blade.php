@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Tambah Penduduk Baru</div>

            <div class="card-body">
                <form action="{{ route('penduduk.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="NIK">NIK:</label>
                        <input type="text" name="NIK" id="NIK" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="No_KK">No. KK:</label>
                        <input type="text" name="No_KK" id="No_KK" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan:</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="RT">RT:</label>
                        <input type="text" name="RT" id="RT" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="RW">RW:</label>
                        <input type="text" name="RW" id="RW" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan:</label>
                        <select name="pendidikan" id="pendidikan" class="form-control" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="Putus Sekolah">Putus Sekolah</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
