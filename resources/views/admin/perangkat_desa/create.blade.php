@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Create Perangkat Desa</h1>
        <div class="row">
            <div class="col-lg-6">
                @if ($errors->any())
        <div class="alert alert-danger">
            Cek lagi inputan anda
        </div>
    @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form id="save-form" action="{{ route('perangkat_desa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="kontak">Kontak</label>
                                <input type="text" name="kontak" class="form-control" id="kontak" required>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            id="gambar" onchange="previewFile()" name="gambar">
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
                                <button type="button" class="btn btn-primary save-button" data-bs-toggle="modal" data-bs-target="#confirmModal">Simpan</button>
                                <a href="{{ route('perangkat_desa.index') }}" class="btn btn-secondary">Kembali</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function submitForm() {
            document.getElementById('save-form').submit();
        }

        function previewFile() {
            const preview = document.getElementById('previewImage');
            const file = document.getElementById('gambar').files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
