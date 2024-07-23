@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">{{ $title }}</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('sarana.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('sarana.store') }}" method="POST" enctype="multipart/form-data" id="create-form">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary save-button" onclick="confirmUpdate()">Simpan</button>
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
                    title: 'Simpan Sarana?',
                    text: "Apakah Anda yakin ingin menyimpan sarana ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Simpan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('create-form').submit();
                    }
                });
            });
        });
    </script>
@endsection
