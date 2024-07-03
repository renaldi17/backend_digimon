<!-- resources/views/produk_hukum/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk Hukum</h1>
    <form action="{{ route('produkhukum.update', $produkhukum->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis_produk">Jenis Produk:</label>
            <select name="jenis_produk" id="jenis_produk" class="form-control" required>
                <option value="Peraturan Desa" {{ $produkhukum->jenis_produk === 'Peraturan Desa' ? 'selected' : '' }}>Peraturan Desa</option>
                <option value="Peraturan Kepala Desa" {{ $produkhukum->jenis_produk === 'Peraturan Kepala Desa' ? 'selected' : '' }}>Peraturan Kepala Desa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ $produkhukum->judul }}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea name="isi" class="form-control" id="isi" required>{{ $produkhukum->isi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $produkhukum->tanggal }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
