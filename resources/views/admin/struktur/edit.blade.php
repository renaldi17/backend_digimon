@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Struktur</h1>
        <div class="row">
            <div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data" id="edit-form">
                            @csrf
                            @method('PUT')
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="gambar">Gambar : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            @if ($struktur->gambar)
                                                <img src="{{ Storage::url($struktur->gambar) }}" width="200px">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="file" name="gambar" class="form-control-file form-control" id="gambar">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="nama">Nama : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $struktur->nama }}" required>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="deskripsi">Deskripsi : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <textarea name="deskripsi" class="form-control summernote" id="deskripsi" rows="10" required>{{ $struktur->deskripsi }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" onclick="confirmUpdate()">Simpan Perubahan</button>
                                                <a href="{{ route('struktur.index') }}" class="btn btn-secondary">Kembali</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
