@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mb-4 mt-4">Ubah Status Pengajuan Surat</h1>
        <div class="row">
            <div class="col-lg-10">
                <div class="card mb-4 shadow">
                    <div class="card-header py-3">
                        Data Pengajuan Surat
                    </div>
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <th style="width: 155px">NIK</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->penduduk->NIK }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->penduduk->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Surat</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->jenisSurat->jenis_surat }}</td>
                            </tr>
                            <tr>
                                <th>RT</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->rt }}</td>
                            </tr>
                            <tr>
                                <th>RW</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->rw }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pembuatan</th>
                                <th>:</th>
                                <td>
                                    {{ \Carbon\Carbon::parse($pengajuanSurat->created_at)->isoFormat('D MMMM Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th>Catatan Tambahan</th>
                                <th>:</th>
                                <td>{{ $pengajuanSurat->catatan }}</td>
                            </tr>
                            <tr>
                                <th>KTP</th>
                                <th>:</th>
                                <th><embed src="{{ asset('storage/' . $pengajuanSurat->ktp) }}" width="100%" height="375"
                                        type="application/pdf"></th>
                            </tr>
                            <tr>
                                <th>Kartu Keluarga</th>
                                <th>:</th>
                                <th><embed src="{{ asset('storage/' . $pengajuanSurat->kk) }}" width="100%" height="375"
                                        type="application/pdf"></th>
                            </tr>

                            <tr>
                                <th>Surat Pengantar RT/RW</th>
                                <th>:</th>
                                <th><embed src="{{ asset('storage/' . $pengajuanSurat->pengantar_rt_rw) }}" width="100%"
                                        height="375" type="application/pdf"></th>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-10 mb-3">
                <div class="card">
                    <div class="card-header py-3">
                        Ubah Status Pengajuan Surat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pengajuanSurat.updateStatus.update', $pengajuanSurat->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="jenis_surat">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($status as $item)
                                                <option {{ $pengajuanSurat->status == $item ? 'selected' : '' }}
                                                    value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger text-sm">
                                                {{ $errors->first('status') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="img">File Surat Balasan</label>
                                        <input type="file" class="form-control @error('balasan') is-invalid @enderror"
                                            id="img" onchange="previewFile()" name="balasan">
                                        @error('gambar')
                                            <div class="invalid-feedback">{{ $error->first('balasan') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="alasan">Catatan Tambahan (Alasan):</label>
                                        <textarea name="alasan" id="alasan" cols="30" rows="3" class="form-control"></textarea>
                                        @if ($errors->has('alasan'))
                                            <span class="text-danger text-sm">
                                                {{ $errors->first('alasan') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Ubah Status
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
