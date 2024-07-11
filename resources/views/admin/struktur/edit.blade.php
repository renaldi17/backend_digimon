@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Struktur</h1>
        <form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $struktur->nama }}" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                @if ($struktur->gambar)
                    <div>
                        <img src="{{ Storage::url($struktur->gambar) }}" alt="Gambar Struktur" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control-file" id="gambar">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5">{{ $struktur->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
