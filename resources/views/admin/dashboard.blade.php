@extends("admin.layouts.app")

@section("content")
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row mb-3">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Total Penduduk</h5>
                                <p class="card-text">{{ $penduduk }}</p>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-user fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Potensi Desa</h5>
                                <p class="card-text">{{ $potensiDesa }}</p>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-store fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Produk Hukum</h5>
                                <p class="card-text">{{ $produkHukum }}</p>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-scale-balanced fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Pengajuan Surat</h5>
                                <p class="card-text">{{ $pengajuanSurat }}</p>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-file-lines fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    Pengajuan Surat Diproses
                                </h5>
                                <p class="card-text">
                                    {{ $pengajuanSuratDiproses }}
                                </p>
                            </div>
                            <div class="col-3">
                                <i class="fa-solid fa-file-pen fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    Pengajuan Surat Disetujui
                                </h5>
                                <p class="card-text">
                                    {{ $pengajuanSuratDisetujui }}
                                </p>
                            </div>
                            <div class="col-3">
                                <i
                                    class="fa-solid fa-file-circle-check fs-1"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    Pengajuan Surat Ditolak
                                </h5>
                                <p class="card-text">
                                    {{ $pengajuanSuratDitolak }}
                                </p>
                            </div>
                            <div class="col-3">
                                <i
                                    class="fa-solid fa-file-circle-xmark fs-1"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
