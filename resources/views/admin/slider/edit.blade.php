@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Slider</h1>
        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $slider->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $slider->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" class="form-control-file" id="gambar">
                @if ($slider->gambar)
                    <img src="/storage/{{ $slider->gambar }}" width="300px">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
