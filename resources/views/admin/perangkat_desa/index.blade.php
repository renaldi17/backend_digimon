@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Perangkat Desa</h1>
        <a href="{{ route('perangkat_desa.create') }}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Jabatan</th>
                    <th>Kontak</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perangkatDesas as $perangkatDesa)
                    <tr>
                        <td>{{ $perangkatDesa->id }}</td>
                        <td>{{ $perangkatDesa->nama }}</td>
                        <td>
                            @if ($perangkatDesa->gambar)
                                <img src="/storage/{{ $perangkatDesa->gambar }}" width="100px">
                            @endif
                        </td>
                        <td>{{ $perangkatDesa->jabatan }}</td>
                        <td>{{ $perangkatDesa->kontak }}</td>
                        <td>
                            <a href="{{ route('perangkat_desa.edit', $perangkatDesa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('perangkat_desa.destroy', $perangkatDesa->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
