@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Galeri</h1>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeris as $galeri)
            <tr>
                <td>{{ $galeri->id }}</td>
                <td>{{ $galeri->judul }}</td>
                <td>{{ $galeri->deskripsi }}</td>
                <td>
                    @if ($galeri->gambar)
                        <img src="{{ asset('storage/' . $galeri->gambar) }}" width="100px">
                    @endif
                </td>
                <td>
                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" style="display:inline;">
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
