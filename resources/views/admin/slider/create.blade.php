@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Create Slider</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar:</label>
                                <input type="file" name="gambar" class="form-control-file" id="gambar">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('slider.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection