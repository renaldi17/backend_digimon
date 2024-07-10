@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informasi</h1>
    <a href="{{ route('informasi.create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Informasi</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Konten</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasies as $informasi)
            <tr>
                <td>{{ $informasi->id }}</td>
                <td>{{ $informasi->jenis_informasi }}</td>
                <td>{{ $informasi->judul }}</td>
                <td>
                    @if ($informasi->gambar)
                        <img src="/storage/{{ $informasi->gambar }}" width="100px">
                    @endif
                </td>
                <td>{{ Str::limit($informasi->konten, 50) }}</td>
                <td>{{ $informasi->tanggal }}</td>
                <td>
                    <a href="{{ route('informasi.edit', $informasi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('informasi.destroy', $informasi->id) }}" method="POST" style="display:inline;">
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
