@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Kontak</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('kontak.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kontaks as $kontak)
                            <tr>
                                <td>{{ $kontak->id }}</td>
                                <td>{{ $kontak->nama }}</td>
                                <td>{{ $kontak->nomor_telepon }}</td>
                                <td>{{ $kontak->email }}</td>
                                <td>
                                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning"
                                        style="color: #ffffff"><i class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff;"></i> |
                                        Edit</a>
                                    <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST"
                                        style="display:inline;" id="delete-form-{{ $kontak->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete({{ $kontak->id }})">
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
