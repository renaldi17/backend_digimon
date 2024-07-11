@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Struktur</h1>
        <form id="edit-form" action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $struktur->nama }}" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                @if ($struktur->gambar)
                    <div>
                        <img src="{{ Storage::url($struktur->gambar) }}" alt="Gambar Struktur" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control-file" id="gambar">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5">{{ $struktur->deskripsi }}</textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="confirmUpdate()">Simpan Perubahan</button>
        </form>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
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