@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Penghargaan</h1>
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Cek lagi inputan anda
                    </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form id="save-form" action="{{ route('penghargaan.update', $penghargaan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control" id="judul"
                                            value="{{ $penghargaan->judul }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" id="tanggal"
                                            value="{{ $penghargaan->tanggal }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-lg-8">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        id="img" onchange="previewFile()" name="gambar">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    @if ($penghargaan->gambar)
                                        <img src="/storage/{{ $penghargaan->gambar }}" width="150px"
                                            class="img-thumbnail mt-2" id="previewImage" style="max-width: 100%;">
                                    @else
                                        <img src="/assets/img/no_img.jpg" class="img-thumbnail mt-2" alt=""
                                            width="150px" id="previewImage" style="max-width: 100%;">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="konten">Konten</label>
                                <textarea name="konten" class="form-control summernote" id="konten" required>{{ $penghargaan->konten }}</textarea>
                            </div>
                            <div class="modal-footer mt-3">
                                <button type="button" class="btn btn-primary save-button">Simpan Perubahan</button>
                                <a href="{{ route('penghargaan.index') }}" class="btn btn-secondary"
                                    style="margin-left:5px;">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                placeholder: 'Write your content here...',
                tabsize: 2,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
            });

            // SweetAlert Confirmation
            const saveButton = document.querySelector('.save-button');

            saveButton.addEventListener('click', function() {
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
                        document.getElementById('save-form').submit();
                    }
                });
            });
        });
    </script>
@endsection
