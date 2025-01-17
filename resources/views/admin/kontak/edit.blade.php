@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">Edit Kontak</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            Cek lagi inputan anda
                        </div>
                    @endif
                        <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ $kontak->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon:</label>
                                <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon"
                                    value="{{ $kontak->nomor_telepon }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $kontak->email }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');

            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the form from submitting normally

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
                        form.submit(); // Submit the form programmatically
                    }
                });
            });
        });
    </script>
@endsection
