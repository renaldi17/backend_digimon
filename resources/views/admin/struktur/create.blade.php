@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Create Struktur</h1>
        <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data">
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
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
