@extends("admin.layouts.app")

@section("content")
    <div class="container-fluid px-5">
        <h1 class="mb-4 mt-4">Detail Data Pengajuan Surat</h1>
            <div class="row">
                <div class="col-lg-10">
                    <div class="card mb-4 shadow">
                        <div class="card-header py-3">
                            Data Pengajuan Surat {{$pengajuanSurat->penduduk->nama}}
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
                                        {{ \Carbon\Carbon::parse($pengajuanSurat->created_at)->isoFormat("D MMMM Y") }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Catatan Tambahan</th>
                                    <th>:</th>
                                    <td>{{ $pengajuanSurat->catatan ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>KTP</th>
                                    <th>:</th>
                                    <th><embed src="{{ asset('storage/' . $pengajuanSurat->ktp) }}" width="100%" height="375" type="application/pdf"></th>
                                </tr>
                                <tr>
                                    <th>Kartu Keluarga</th>
                                    <th>:</th>
                                    <th><embed src="{{ asset('storage/' . $pengajuanSurat->kk) }}" width="100%" height="375" type="application/pdf"></th>
                                </tr>

                                <tr>
                                    <th>Surat Pengantar RT/RW</th>
                                    <th>:</th>
                                    <th><embed src="{{ asset('storage/' . $pengajuanSurat->pengantar_rt_rw) }}" width="100%" height="375" type="application/pdf"></th>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header py-3">
                            Status Pengajuan Surat
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <tr>
                                    <th style="width: 225px">Status</th>
                                    <th style="width: 10px">:</th>
                                    <td>
                                        @php
                                            $badgeClass = "";
                                            switch ($pengajuanSurat->status) {
                                                case "Diajukan":
                                                    $badgeClass = "badge text-bg-primary";
                                                    break;
                                                case "Disetujui":
                                                    $badgeClass = "badge text-bg-success";
                                                    break;
                                                case "Ditolak":
                                                    $badgeClass = "badge text-bg-danger";
                                                    break;
                                                default:
                                                    $badgeClass = "badge";
                                                    break;
                                            }
                                        @endphp

                                        <span class="{{ $badgeClass }}">
                                            {{ $pengajuanSurat->status }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pengambilan</th>
                                    <th>:</th>
                                    <td>
                                        {{ \Carbon\Carbon::parse($pengajuanSurat->tanggal_pengambilan)->isoFormat("D MMMM Y") }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Catatan Tambahan (Alasan)</th>
                                    <th>:</th>
                                    <td>{{ $pengajuanSurat->alasan ?? "-" }}</td>
                                </tr>
                                
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-10 mb-3">
                    <div class="row">
                        <div class="col-2">
                            <a href="{{ route('pengajuanSurat.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                        <div class="col-2 offset-8">
                            <a
                                href="{{ route("pengajuanSurat.updateStatus.index", $pengajuanSurat->id) }}"
                                class="btn btn-warning"
                                style="color: #ffffff"
                            >
                                <i
                                    class="fa-solid fa-pen-to-square"
                                    style="color: #ffffff"
                                ></i>
                                | Ubah Status
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
