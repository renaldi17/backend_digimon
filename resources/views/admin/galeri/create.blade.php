@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="row">
            <div class="col-lg-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Cek lagi inputan anda
                    </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form id="save-form" action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
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
                                    <img src="/assets/img/no_img.jpg" class="img-thumbnail" alt="" width="150px"
                                        id="previewImage" style="max-width: 100%;">
                                </div>
                            </div>
                            <div class="modal-footer mt-5">
                                <button type="button" class="btn btn-primary save-button" data-bs-toggle="modal"
                                    data-bs-target="#confirmModal">Simpan Perubahan</button>
                                <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Kembali</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
