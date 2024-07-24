@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">{{ $title }}</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <form action="{{ route('sarana.update', $sarana->id) }}" method="POST" enctype="multipart/form-data"
                    id="edit-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $sarana->nama }}"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah"
                            value="{{ $sarana->jumlah }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                        @if ($sarana->gambar)
                            <img src="{{ asset('storage/' . $sarana->gambar) }}" class="img-thumbnail mt-2" width="150px">
                        @endif
                    </div>
                    @extends('admin.layouts.app')

                @section('content')
                    <div class="container-fluid px-5">
                        <h1 class="mt-4">{{ $title }}</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form action="{{ route('sarana.update', $sarana->id) }}" method="POST"
                                    enctype="multipart/form-data" id="edit-form">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="{{ $sarana->nama }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" id="jumlah"
                                            value="{{ $sarana->jumlah }}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" name="gambar" class="form-control" id="img">
                                        @if ($sarana->gambar)
                                            <img src="{{ asset('storage/' . $sarana->gambar) }}" class="img-thumbnail mt-2"
                                                width="150px">
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary save-button"
                                        onclick="confirmUpdate()">Simpan</button>
                                    <a href="{{ route('sarana.index') }}" class="btn btn-secondary">Kembali</a>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- SweetAlert Confirmation -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
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
                                        document.getElementById('edit-form').submit();
                                    }
                                });
                            });
                        });
                    </script>
                @endsection
            </form>
        </div>
    </div>
</div>

<!-- SweetAlert Confirmation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
                    document.getElementById('edit-form').submit();
                }
            });
        });
    });
</script>
@endsection
