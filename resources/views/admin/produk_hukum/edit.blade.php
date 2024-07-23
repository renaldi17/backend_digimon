@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Produk Hukum</h1>
        <div class="row">
            <div class="col-lg-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Cek lagi inputan anda
                    </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form id="edit-form" action="{{ route('produk_hukum.update', $produkHukum->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="jenis_produk">Jenis Produk:</label>
                                <select name="jenis_produk" class="form-control" id="jenis_produk" required>
                                    <option value="Hukum Desa"
                                        {{ $produkHukum->jenis_produk == 'Hukum Desa' ? 'selected' : '' }}>Hukum Desa
                                    </option>
                                    <option value="Hukum Kepala Desa"
                                        {{ $produkHukum->jenis_produk == 'Hukum Kepala Desa' ? 'selected' : '' }}>Hukum
                                        Kepala Desa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    value="{{ $produkHukum->judul }}" required>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi:</label>
                                <textarea name="isi" class="form-control summernote" id="isi" required>{{ $produkHukum->isi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal"
                                    value="{{ $produkHukum->tanggal }}" required>
                            </div>
                            <div class="modal-footer mt-5">
                                <button type="submit" class="btn btn-primary save-button" onclick="confirmUpdate()">Simpan
                                    Perubahan</button>
                                <a href="{{ route('produk_hukum.index') }}" class="btn btn-secondary">Kembali</a>
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
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

        function confirmUpdate() {
            Swal.fire({
                title: 'Konfirmasi',
                text: "Apakah Anda yakin ingin menyimpan perubahan ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('edit-form').submit();
                }
            });
        }
    </script>
@endsection
