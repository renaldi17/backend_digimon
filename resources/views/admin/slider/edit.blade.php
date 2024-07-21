@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Slider</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ $slider->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $slider->deskripsi }}</textarea>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label for="img">Gambar</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            id="img" onchange="previewFile()" name="gambar">
                                        @error('gambar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    @if ($slider->gambar)
                                        <img src="{{ asset('storage/' . $slider->gambar) }}" class="img-thumbnail mt-2"
                                            id="previewImage" style="max-width: 100%;">
                                    @else
                                        <img src="/assets/img/no_img.jpg" class="img-thumbnail mt-2" alt=""
                                            width="150px" id="previewImage" style="max-width: 100%;">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('slider.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
