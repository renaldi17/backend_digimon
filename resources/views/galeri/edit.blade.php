@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Galeri</h1>
    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ $galeri->judul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $galeri->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
            @if ($galeri->gambar)
                <img src="{{ asset('storage/' . $galeri->gambar) }}" width="300px">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
