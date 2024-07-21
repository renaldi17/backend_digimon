@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Penghargaan</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('penghargaan.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Konten</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penghargaans as $penghargaan)
                            <tr>
                                <td>{{ $penghargaan->id }}</td>
                                <td>{{ $penghargaan->judul }}</td>
                                <td>
                                    @if ($penghargaan->gambar)
                                        <img src="{{ asset('storage/' . $penghargaan->gambar) }}" width="100px">
                                    @endif
                                </td>
                                <td>{{ Str::limit(strip_tags($penghargaan->konten), 50) }}</td>
                                <td>{{ $penghargaan->tanggal }}</td>
                                <td>
                                    <a href="{{ route('penghargaan.edit', $penghargaan->id) }}" class="btn btn-warning"
                                        style="color: #ffffff"><i class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff;"></i> |
                                        Edit</a>
                                    <form action="{{ route('penghargaan.destroy', $penghargaan->id) }}" method="POST"
                                        style="display:inline;" id="delete-form-{{ $penghargaan->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete({{ $penghargaan->id }})">
                                            <i class="fa-solid fa-trash" style="color: #ffffff;"></i> | Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this item?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
