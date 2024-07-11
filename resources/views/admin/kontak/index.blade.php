@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Kontak</h1>
        <a href="{{ route('kontak.create') }}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontaks as $kontak)
                    <tr>
                        <td>{{ $kontak->id }}</td>
                        <td>{{ $kontak->nama }}</td>
                        <td>{{ $kontak->nomor_telepon }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>
                            <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" style="display:inline;">
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
