@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Perangkat Desa</h1>
        <form action="{{ route('perangkat_desa.update', $perangkatDesa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $perangkatDesa->nama }}"
                    required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" class="form-control-file" id="gambar">
                @if ($perangkatDesa->gambar)
                    <img src="/storage/{{ $perangkatDesa->gambar }}" width="300px">
                @endif
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" id="jabatan"
                    value="{{ $perangkatDesa->jabatan }}" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="text" name="kontak" class="form-control" id="kontak"
                    value="{{ $perangkatDesa->kontak }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
