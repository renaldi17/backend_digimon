@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Struktur</h1>
    <a href="{{ route('struktur.create') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($strukturs as $struktur)
            <tr>
                <td>{{ $struktur->id }}</td>
                <td>{{ $struktur->nama }}</td>
                <td>
                    @if ($struktur->gambar)
                        <img src="{{ Storage::url($struktur->gambar) }}" alt="Gambar Struktur" style="max-width: 100px;">
                    @else
                        -
                    @endif
                </td>
                <td>{!! Str::limit($struktur->deskripsi, 50) !!}</td>
                <td>
                    <a href="{{ route('struktur.edit', $struktur->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('struktur.destroy', $struktur->id) }}" method="POST" style="display:inline;">
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
