@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">{{ $title }}</h1>


        <div class="card shadow mb-5 ">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('galeri.create') }}" class="btn btn-primary float-right mb-0" style="color: #ffffff;">
                    <i class="fa-solid fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeris as $i => $galeri)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $galeri->judul }}</td>
                                <td>{{ $galeri->deskripsi }}</td>
                                <td>
                                    @if ($galeri->gambar)
                                        <img src="{{ asset('storage/' . $galeri->gambar) }}" width="100px">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning"
                                        style="color: #ffffff"><i class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff;"></i> |
                                        Edit</a>
                                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST"
                                        style="display:inline;" id="delete-form-{{ $galeri->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDelete({{ $galeri->id }})">
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
