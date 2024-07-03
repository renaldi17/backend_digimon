@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informasi</h1>
    <a href="{{ route('informasi.create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasis as $informasi)
            <tr>
                <td>{{ $informasi->id }}</td>
                <td>{{ $informasi->judul }}</td>
                <td>
                    @if ($informasi->gambar)
                        <img src="/storage/{{ $informasi->gambar }}" width="100px">
                    @endif
                </td>                
                <td>{{ $informasi->jenis }}</td>
                <td>{{ $informasi->deskripsi }}</td>
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
