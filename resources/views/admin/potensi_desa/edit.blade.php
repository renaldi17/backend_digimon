@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Potensi Desa</h1>
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Cek lagi inputan anda
                    </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form id="save-form" action="{{ route('potensi_desa.update', $potensiDesa->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="jenis">Jenis</label>
                                        <select name="jenis" class="form-control" id="jenis" required>
                                            <option value="umkm" {{ $potensiDesa->jenis == 'umkm' ? 'selected' : '' }}>
                                                UMKM
                                            </option>
                                            <option value="wisata" {{ $potensiDesa->jenis == 'wisata' ? 'selected' : '' }}>
                                                Wisata
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="{{ $potensiDesa->judul }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="lokasi">Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" id="lokasi"
                                            value="{{ $potensiDesa->lokasi }}" required>
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
                                            @if ($potensiDesa->gambar)
                                                <img src="/storage/{{ $potensiDesa->gambar }}" width="150px"
                                                    class="img-thumbnail mt-2" id="previewImage" style="max-width: 100%;">
                                            @else
                                                <img src="/assets/img/no_img.jpg" class="img-thumbnail mt-2" alt=""
                                                    width="150px" id="previewImage" style="max-width: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="hari_buka">Hari Buka</label>
                                        <input type="text" name="hari_buka" class="form-control" id="hari_buka"
                                            value="{{ $potensiDesa->hari_buka }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="hari_tutup">Hari Tutup</label>
                                        <input type="text" name="hari_tutup" class="form-control" id="hari_tutup"
                                            value="{{ $potensiDesa->hari_tutup }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="buka">Buka</label>
                                        <input type="time" name="buka" class="form-control" id="buka"
                                            value="{{ \Carbon\Carbon::parse($potensiDesa->buka)->format('H:i') }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="tutup">Tutup</label>
                                        <input type="time" name="tutup" class="form-control" id="tutup"
                                            value="{{ \Carbon\Carbon::parse($potensiDesa->tutup)->format('H:i') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control summernote" id="deskripsi" required>{{ $potensiDesa->konten }}</textarea>
                                </div>

                            </div>



                            <div class="modal-footer mt-5">
                                <a href="{{ route('potensi_desa.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary save-button" style="margin-left:5px;"
                                    data-bs-toggle="modal" data-bs-target="#confirmModal">Simpan Perubahan</button>
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
        });

        function submitForm() {
            document.getElementById('save-form').submit();
        }

        function previewFile() {
            const preview = document.getElementById('previewImage');
            const file = document.getElementById('gambar').files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
