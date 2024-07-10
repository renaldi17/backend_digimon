@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kontak</h1>
    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $kontak->nama }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ $kontak->nomor_telepon }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $kontak->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
