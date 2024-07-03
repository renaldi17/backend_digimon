<!-- resources/views/produk_hukum/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Produk Hukum</h1>
    <form action="{{ route('produkhukum.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis_produk">Jenis Produk:</label>
            <select name="jenis_produk" id="jenis_produk" class="form-control" required>
                <option value="Peraturan Desa">Peraturan Desa</option>
                <option value="Peraturan Kepala Desa">Peraturan Kepala Desa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea name="isi" class="form-control" id="isi" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
