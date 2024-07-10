@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produk Hukum</h1>
    <a href="{{ route('produk_hukum.create') }}" class="btn btn-primary">Create</a>
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
            @foreach ($produkHukums as $produkHukum)
            <tr>
                <td>{{ $produkHukum->id }}</td>
                <td>{{ $produkHukum->jenis_produk }}</td>
                <td>{{ $produkHukum->judul }}</td>
                <td>{!! Str::limit($produkHukum->isi, 50) !!}</td>
                <td>{{ $produkHukum->tanggal }}</td>
                <td>
                    <a href="{{ route('produk_hukum.edit', $produkHukum->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('produk_hukum.destroy', $produkHukum->id) }}" method="POST" style="display:inline;">
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
