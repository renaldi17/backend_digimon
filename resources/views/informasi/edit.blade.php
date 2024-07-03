@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Informasi</h1>
    <form action="{{ route('informasi.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ $informasi->judul }}" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis:</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="berita" {{ $informasi->jenis === 'berita' ? 'selected' : '' }}>Berita</option>
                <option value="pengumuman" {{ $informasi->jenis === 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                <option value="agenda" {{ $informasi->jenis === 'agenda' ? 'selected' : '' }}>Agenda Kegiatan</option>
                <option value="apb" {{ $informasi->jenis === 'apb' ? 'selected' : '' }}>APB Desa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $informasi->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $informasi->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
            @if ($informasi->gambar)
                <img src="/path/to/your/images/{{ $informasi->gambar }}" width="300px">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
