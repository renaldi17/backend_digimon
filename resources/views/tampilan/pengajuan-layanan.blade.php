<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Pengajuan Layanan</title>
</head>

<body>
    <x-common.navbar />
    <main class="min-h-screen">
        <section class="mx-0 mt-36 sm:mx-12 md:mx-20 lg:mx-40">
            <h1 class="mb-4 text-center text-4xl font-bold">
                PENGAJUAN LAYANAN
            </h1>

            @if (session('error_nik'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error_nik') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- FORM PENGAJUAN --}}
            <form {{-- Action dan Method untuk Form --}} action="{{ route('pengajuan.store') }}" method="POST"
                enctype="multipart/form-data" class="mb-4 rounded bg-white px-10 pb-8 pt-16 sm:px-20"
                id="form-pengajuan">
                @csrf

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="jenisSurat">
                        Jenis Surat
                    </label>
                    <select id="jenisSurat"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 bg-gray-200 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        name="jenis_surat_id">
                        @foreach ($jenisSurat as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->jenis_surat }}
                            </option>
                        @endforeach
                    </select>
                    @error('jenis_surat_id')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="nik">
                        NIK
                    </label>
                    <input type="text" id="nik" name="nik"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        placeholder="NIK" />
                    @error('nik')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="nama">
                        Nama Lengkap
                    </label>
                    <input type="text" id="nama" name="nama"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        placeholder="Nama Lengkap" />
                    @error('nama')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="tanggal_lahir">
                        Tanggal Lahir
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        placeholder="dd/mm/yyyy" required />
                    @error('tanggal_lahir')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="rt">
                        RT
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="text" id="rt" name="rt"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        placeholder="001" required />
                    @error('rt')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="rw">
                        RW
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="text" id="rw" name="rw"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        placeholder="004" required />
                    @error('rw')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="catatan">
                        Catatan Tambahan
                    </label>
                    <textarea id="catatan" name="catatan"
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        rows="3"></textarea>
                    @error('catatan')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="foto_ktp">
                        KTP
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="file" id="foto_ktp" name="ktp" accept="application/pdf" {{-- perlu disesuaikan untuk tipe file nya --}}
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-500 file:border-b-0 file:border-l-0 file:border-r-2 file:border-t-0 file:border-gray-300 file:py-1 file:text-gray-400 focus:outline-none"
                        required />
                    @error('ktp')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="foto_kk">
                        Kartu Keluarga
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="file" id="foto_kk" name="kk" accept="application/pdf"
                        {{-- perlu disesuaikan untuk tipe file nya --}}
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-500 file:border-b-0 file:border-l-0 file:border-r-2 file:border-t-0 file:border-gray-300 file:py-1 file:text-gray-400 focus:outline-none"
                        required />
                    @error('kk')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-xl text-black" for="surat_pengantar_rt_rw">
                        Pengantar Dari RT/RW
                        <span>
                            <ion-icon name="alert-circle"></ion-icon>
                        </span>
                    </label>
                    <input type="file" id="surat_pengantar_rt_rw" name="pengantar_rt_rw" accept="application/pdf"
                        {{-- perlu disesuaikan untuk tipe file nya --}}
                        class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-500 file:border-b-0 file:border-l-0 file:border-r-2 file:border-t-0 file:border-gray-300 file:py-1 file:text-gray-400 focus:outline-none"
                        required />
                    @error('pengantar_rt_rw')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="focus:shadow-outline w-full rounded border border-[#2C5D3C] bg-green-600 px-4 py-2 text-white hover:bg-[#2C5D3C] focus:outline-none"
                        type="button" onclick="confirmSend()">
                        Kirim Surat
                    </button>
                </div>
            </form>
        </section>
    </main>
    <x-common.footer :kontak="$kontaks" />

    <script>
        function confirmSend() {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Apakah data yang anda masukkan sudah benar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, kirim!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-pengajuan').submit();
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
