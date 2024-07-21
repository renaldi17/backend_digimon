<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Wisata</title>
</head>

<body>
    <x-common.navbar />

    <main class="min-h-screen my-24">
        @foreach ($data as $data)
            <section class="container mt-6 py-6 flex flex-col gap-4">
                <h1 class="font-poppins text-4xl font-bold">
                    {{ $data->judul }}
                </h1>

                <div class="text-sm text-gray-400 flex items-center gap-2">
                    <i class="fa-regular fa-calendar ml-1"></i>
                    @if ($jenis == 'Berita' || $jenis == 'Penghargaan')
                        {{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}
                    @else
                        {{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}
                    @endif
                </div>

                <div class="relative min-h-96">
                    <img class="absolute inset-0 w-full h-full object-cover" src="/storage/{{ $data->gambar }}"
                        alt="Desa Tegal Manggung">
                </div>
            </section>

            <section class="container mt-6 py-6 flex flex-col md:flex-row gap-10">
                <div class="md:flex-1 md:w-2/3">
                    @if ($jenis == 'Wisata' || $jenis == 'Produk')
                        <h2 class="font-poppins text-3xl font-semibold mb-4">
                            Deskripsi
                        </h2>
                    @else
                    @endif
                    {!! $data->konten !!}
                </div>

                @if ($jenis == 'Berita' || $jenis == 'Penghargaan')
                @else
                    <aside class="md:flex-none md:w-1/3">
                        <div class="relative min-h-64">
                            {{-- {{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }} --}}
                            {!! $data->lokasi !!}

                            <table class="mt-5 align-items-center">
                                <tr>
                                    <td><b>Buka</b></td>
                                </tr>
                                <tr>
                                    <td>{{ $data->hari_buka }}</td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>{{ \Carbon\Carbon::parse($data->buka)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($data->tutup)->format('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tutup</b></td>
                                </tr>
                                <tr>
                                    <td>{{ $data->hari_tutup }}</td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>Tutup</td>
                                </tr>
                            </table>
                        </div>
                    </aside>
                @endif
            </section>
        @endforeach
    </main>

    <x-common.footer />
</body>

</html>
