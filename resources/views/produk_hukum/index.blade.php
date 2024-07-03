<!-- resources/views/produk_hukum/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produk Hukum</h1>
    <a href="{{ route('produkhukum.create') }}" class="btn btn-primary mb-3">Create</a>
    <table class="table">
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
            @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->jenis_produk }}</td>
                <td>{{ $produk->judul }}</td>
                <td>{{ $produk->isi }}</td>
                <td>{{ $produk->tanggal }}</td>
                <td>
                    <a href="{{ route('produkhukum.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('produkhukum.destroy', $produk->id) }}" method="POST" style="display:inline;">
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
