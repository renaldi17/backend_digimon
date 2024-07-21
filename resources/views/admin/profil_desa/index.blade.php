@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Profil Desa</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card shadow mb-5">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-primary float-right mb-0"
                    style="color: #ffffff;">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Gambar Kepala Desa</th>
                            <th>Nama Kepala Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @if ($profil->gambar_kepala_desa)
                                    <img src="{{ Storage::url($profil->gambar_kepala_desa) }}" width="100px">
                                @endif
                            </td>
                            <td>{{ $profil->nama_kepala_desa }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Deskripsi Kepala Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-justify">{!! $profil->deskripsi_kepala_desa !!}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Video Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                @if ($profil->video_desa)
                                    <video width="600" controls>
                                        <source src="{{ Storage::url($profil->video_desa) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center w-25">Gambar Sejarah Desa</th>
                            <th class="text-center">Sejarah Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                @if ($profil->gambar_sejarah_desa)
                                    <img src="{{ Storage::url($profil->gambar_sejarah_desa) }}" width="250px">
                                @endif
                            </td>
                            <td>{!! $profil->sejarah_desa !!}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center w-50">Visi Desa</th>
                            <th class="text-center w-50">Misi Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! $profil->visi_desa !!}</td>
                            <td>{!! $profil->misi_desa !!}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Tujuan Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! $profil->tujuan_desa !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
