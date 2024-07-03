@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Informasi</h1>
    <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis:</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="berita">Berita</option>
                <option value="pengumuman">Pengumuman</option>
                <option value="agenda">Agenda Kegiatan</option>
                <option value="apb">APB Desa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
