@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Penduduk</h1>
        <a href="{{ route('penduduk.create') }}" class="btn btn-primary">Create</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Penduduk</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No. KK</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penduduks as $penduduk)
                                    <tr>
                                        <td>{{ $penduduk->nama }}</td>
                                        <td>{{ $penduduk->NIK }}</td>
                                        <td>{{ $penduduk->No_KK }}</td>
                                        <td>
                                            <a href="{{ route('penduduk.show', $penduduk->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('penduduk.edit', $penduduk->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
