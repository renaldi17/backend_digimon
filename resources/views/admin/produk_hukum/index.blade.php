@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Produk Hukum</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('produk_hukum.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jenis Produk</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produkHukums as $produkHukum)
                            <tr>
                                <td>{{ $produkHukum->id }}</td>
                                <td>{{ $produkHukum->jenis_produk }}</td>
                                <td>{{ $produkHukum->judul }}</td>
                                <td>{!! Str::limit($produkHukum->isi, 50) !!}</td>
                                <td>{{ $produkHukum->tanggal }}</td>
                                <td>
                                    <a href="{{ route('produk_hukum.edit', $produkHukum->id) }}" class="btn btn-warning"
                                        style="color: #ffffff"><i class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff;"></i> |
                                        Edit</a>
                                    <form action="{{ route('produk_hukum.destroy', $produkHukum->id) }}" method="POST"
                                        style="display:inline;" id="delete-form-{{ $produkHukum->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete({{ $produkHukum->id }})">
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
