@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Potensi Desa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('potensi_desa.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Gambar</th>
                            <th>Hari Buka</th>
                            <th>Hari Tutup</th>
                            <th>Buka</th>
                            <th>Tutup</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($potensiDesas as $i => $potensiDesa)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $potensiDesa->judul }}</td>
                                <td>{{ $potensiDesa->jenis }}</td>
                                <td>
                                    @if ($potensiDesa->gambar)
                                        <img src="{{ asset('storage/' . $potensiDesa->gambar) }}" width="100px">
                                    @endif
                                </td>
                                <td>{{ $potensiDesa->hari_buka }}</td>
                                <td>{{ $potensiDesa->hari_tutup }}</td>
                                <td>{{ \Carbon\Carbon::parse($potensiDesa->buka)->format('H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($potensiDesa->tutup)->format('H:i') }}</td>
                                <td>
                                    <a href="{{ route('potensi_desa.edit', $potensiDesa->id) }}" class="btn btn-warning"
                                        style="color: #ffffff"><i class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff;"></i> |
                                        Edit</a>
                                    <form action="{{ route('potensi_desa.destroy', $potensiDesa->id) }}" method="POST"
                                        style="display:inline;" id="delete-form-{{ $potensiDesa->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete({{ $potensiDesa->id }})">
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
@endsection

<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this item?")) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
