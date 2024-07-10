@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Perangkat Desa</h1>
    <form action="{{ route('perangkat_desa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" required>
        </div>
        <div class="form-group">
            <label for="kontak">Kontak:</label>
            <input type="text" name="kontak" class="form-control" id="kontak" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
