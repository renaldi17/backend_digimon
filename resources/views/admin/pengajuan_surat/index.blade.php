@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4">Pengajuan Surat</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-5 shadow">
            <div class="card-header d-flex justify-content-end py-3"></div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Surat</th>
                            <th>Status</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Tanggal Balasan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengajuanSurat as $pengajuan)
                            <tr>
                                <td>{{ $pengajuan->penduduk->nama }}</td>
                                <td>
                                    {{ $pengajuan->jenisSurat->jenis_surat }}
                                </td>
                                <td>
                                    @php
                                        $badgeClass = '';
                                        switch ($pengajuan->status) {
                                            case 'Diajukan':
                                                $badgeClass = 'badge text-bg-primary';
                                                break;
                                            case 'Disetujui':
                                                $badgeClass = 'badge text-bg-success';
                                                break;
                                            case 'Ditolak':
                                                $badgeClass = 'badge text-bg-danger';
                                                break;
                                            default:
                                                $badgeClass = 'badge';
                                                break;
                                        }
                                    @endphp

                                    <span class="{{ $badgeClass }}">
                                        {{ $pengajuan->status }}
                                    </span>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($pengajuan->created_at)->isoFormat('D MMMM Y') }}
                                </td>
                                <td>
                                    {{ $pengajuan->tanggal_pengambilan ? \Carbon\Carbon::parse($pengajuan->tanggal_pengambilan)->isoFormat('D MMMM Y') : '-' }}
                                </td>
                                <td>
                                    <a href="{{ route('pengajuanSurat.show', $pengajuan->id) }}" class="btn btn-info btn-sm"
                                        style="color: #ffffff">
                                        <i class="fa-solid fa-eye" style="color: #ffffff"></i>
                                        | Detail
                                    </a>
                                    <a href="{{ route('pengajuanSurat.updateStatus.index', $pengajuan->id) }}"
                                        class="btn btn-warning btn-sm" style="color: #ffffff">
                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff"></i>
                                        | Ubah Status
                                    </a>
                                    <form action="{{ route('pengajuanSurat.destroy', $pengajuan->id) }}" method="POST"
                                        style="display: inline" id="delete-form-{{ $pengajuan->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="confirmDelete({{ $pengajuan->id }})">
                                            <i class="fa-solid fa-trash" style="color: #ffffff"></i>
                                            | Hapus
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

<script>
    function confirmDelete(id) {
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
