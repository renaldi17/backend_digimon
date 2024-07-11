@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Slider</h1>
        <a href="{{ route('slider.create') }}" class="btn btn-primary">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->nama }}</td>
                        <td>{{ $slider->deskripsi }}</td>
                        <td>
                            @if ($slider->gambar)
                                <img src="/storage/{{ $slider->gambar }}" width="100px">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display:inline;">
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
