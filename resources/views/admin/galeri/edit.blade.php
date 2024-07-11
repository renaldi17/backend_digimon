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
                        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" id="save-form">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    value="{{ $galeri->judul }}" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $galeri->deskripsi }}</textarea>
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
                                        @if ($galeri->gambar)
                                            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="img-thumbnail mt-2" id="previewImage" style="max-width: 100%;">
                                        @else
                                            <img src="/assets/img/no_img.jpg" class="img-thumbnail mt-2" alt="" width="150px" id="previewImage" style="max-width: 100%;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5">
                                <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary save-button">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview File Script -->
    <script>
        function previewFile() {
            const preview = document.getElementById('previewImage');
            const file = document.getElementById('img').files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // SweetAlert Confirmation
        document.addEventListener('DOMContentLoaded', function () {
            const saveButton = document.querySelector('.save-button');

            saveButton.addEventListener('click', function () {
                Swal.fire({
                    title: 'Simpan Perubahan?',
                    text: "Apakah Anda yakin ingin menyimpan perubahan ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Simpan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        submitForm();
                    }
                });
            });
        });

        function submitForm() {
            document.getElementById('save-form').submit();
        }
    </script>
@endsection
