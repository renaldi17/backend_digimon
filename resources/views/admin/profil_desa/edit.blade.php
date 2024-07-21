@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit profil</h1>
        <div class="row">
            <div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data" id="edit-form">
                            @csrf
                            @method('PUT')
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="gambar_kepala_desa">Gambar Kepala Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            @if ($profil->gambar_kepala_desa)
                                                <img src="{{ Storage::url($profil->gambar_kepala_desa) }}" width="200px">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="file" name="gambar_kepala_desa" class="form-control-file form-control" id="gambar_kepala_desa">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="nama_kepala_desa">Nama Kepala Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <input type="text" name="nama_kepala_desa" class="form-control" id="nama_kepala_desa" value="{{ $profil->nama_kepala_desa }}" required>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="deskripsi_kepala_desa">Deskripsi Kepala Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <textarea name="deskripsi_kepala_desa" class="form-control summernote" id="deskripsi_kepala_desa summernote" rows="10" required>{{ $profil->deskripsi_kepala_desa }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="video_desa">Video Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            @if ($profil->video_desa)
                                                <video width="500" controls>
                                                    <source src="{{ Storage::url($profil->video_desa) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                            <input type="file" name="video_desa" class="form-control-file form-control" id="video_desa">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="gambar_sejarah_desa">Gambar Sejarah Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            @if ($profil->gambar_sejarah_desa)
                                                <img src="{{ Storage::url($profil->gambar_sejarah_desa) }}" width="500px" class="mb-2">
                                            @endif
                                            <input type="file" name="gambar_sejarah_desa" class="form-control-file form-control" id="gambar_sejarah_desa">
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="sejarah_desa">Sejarah Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <textarea name="sejarah_desa" class="form-control summernote" id="sejarah_desa" rows="10" required>{{ $profil->sejarah_desa }}</textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class=" w-50"><label for="visi_desa">Visi Desa : </label></td>
                                        <td class=" w-50"><label for="misi_desa">Misi Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea name="visi_desa" class="form-control summernote" id="visi_desa" rows="10" required>{{ $profil->visi_desa }}</textarea>
                                        </td>
                                        <td>
                                            <textarea name="misi_desa" class="form-control summernote" id="misi_desa" rows="10" required>{{ $profil->misi_desa }}</textarea>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><label for="tujuan_desa">Tujuan Desa : </label></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <textarea name="tujuan_desa" class="form-control summernote" id="tujuan_desa" rows="10" required>{{ $profil->tujuan_desa }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" onclick="confirmUpdate()">Simpan Perubahan</button>
                                                <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
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
