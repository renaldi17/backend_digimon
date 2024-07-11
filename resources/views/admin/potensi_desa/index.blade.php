@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Potensi Desa</h1>
        <a href="{{ route('potensi_desa.create') }}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Hari Buka</th>
                    <th>Hari Tutup</th>
                    <th>Buka</th>
                    <th>Tutup</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($potensiDesas as $potensiDesa)
                    <tr>
                        <td>{{ $potensiDesa->id }}</td>
                        <td>{{ $potensiDesa->nama }}</td>
                        <td>{{ $potensiDesa->jenis }}</td>
                        <td>
                            @if ($potensiDesa->gambar)
                                <img src="/storage/{{ $potensiDesa->gambar }}" width="100px">
                            @endif
                        </td>
                        <td>{{ $potensiDesa->deskripsi }}</td>
                        <td>{{ $potensiDesa->lokasi }}</td>
                        <td>{{ $potensiDesa->hari_buka }}</td>
                        <td>{{ $potensiDesa->hari_tutup }}</td>
                        <td>{{ $potensiDesa->buka }}</td>
                        <td>{{ $potensiDesa->tutup }}</td>
                        <td>
                            <a href="{{ route('potensi_desa.edit', $potensiDesa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('potensi_desa.destroy', $potensiDesa->id) }}" method="POST"
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
