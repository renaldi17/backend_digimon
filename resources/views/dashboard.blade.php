<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="/assets/css/tampilan.css">
    @vite('resources/css/app.css')

    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
    <title>Website Desa Tegalmanggung</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .text-cream {
            color: #ffff9c;
            /* Warna cre
            am */
        }

        .embla {
            position: relative;
            overflow: hidden;
        }

        .embla__viewport {
            overflow: hidden;
        }

        .embla__container {
            display: flex;
            flex-direction: row;
            will-change: transform;
        }

        .embla__slide {
            position: relative;
            min-width: 100%;
            display: flex;
            justify-content: center;
            /* Memusatkan gambar secara horizontal */
            align-items: center;
            /* Memusatkan gambar secara vertikal */
        }

        .embla__slide img {
            width: 700px;
            height: 380px;
            display: block;
        }
    </style>
</head>

<body>
    <x-common.navbar />

    <main class="min-h-screen">
        <section id="section-main" class="fade-in min-[512px]  relative h-screen max-h-[680px] pt-16 md:pt-32">
            <div
                class="container relative z-10 mt-6 flex max-w-screen-lg flex-col gap-y-2 text-zinc-50 sm:mt-8 xl:pl-48">
                <div>
                    <h2 class="scroll-m-20 text-pretty pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                        SELAMAT DATANG DI DESA TEGALMANGGUNG
                    </h2>
                    <p class="text-pretty text-xl text-muted">
                        Kawasan Desa Alpukat
                    </p>
                </div>

                <div class="flex gap-x-2">
                    <x-ui.button size="icon" variant="ghost" href="#">
                        <i class="fa-brands fa-square-instagram h-8 w-8"></i>
                    </x-ui.button>
                    <x-ui.button size="icon" variant="ghost" href="#">
                        <i class="fa-brands fa-square-whatsapp h-8 w-8"></i>
                    </x-ui.button>
                </div>
            </div>

            <div class="asap absolute left-0 right-0 top-0 z-10 md:top-[0] lg:top-[0] h-[800px] w-[100%]">

            </div>
            <div
                class="container absolute left-0 right-0 top-80 z-10 max-w-screen-lg sm:top-[550px] md:top-[550px] lg:top-[550px] xl:top-[550px] ">
                <div
                    class="grid grid-cols-2 justify-items-center gap-2 rounded-md bg-background sm:grid-cols-4 shadow-lg ">
                    <a href="/profil"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-blue-500 p-4">
                            <i class="fa-solid fa-book-open h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">
                            Profil Desa
                        </span>
                    </a>
                    <a href="/pengajuan"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4">
                            <i class="fa-regular fa-file-lines h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">
                            Pengajuan Surat
                        </span>
                    </a>

                    <a href="/infodesa/berita"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-yellow-500 p-4">
                            {{-- <i class="fa-solid fa-chart-pie h-12 w-12 text-zinc-50"></i> --}}
                            <i class="fa-solid fa-newspaper h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">
                            Berita Desa
                        </span>
                    </a>

                    <a href="/infodesa/wisata"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-orange-500 p-4">
                            <i class="fa-solid fa-palette h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">
                            Wisata Desa
                        </span>
                    </a>

                    <a href="/infografis"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-green-500 p-4">
                            <i class="fa-solid fa-chart-pie h-12 w-12 text-zinc-50"></i>
                            {{-- <i class="fa-solid fa-box-archive h-12 w-12 text-zinc-50"></i> --}}
                        </div>
                        <span class="text-lg font-semibold">
                            Data Infografis
                        </span>
                    </a>

                    <a href="/status"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-indigo-500 p-4">
                            <i class="fa-solid fa-bullhorn h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">Cek Status Pengajuan</span>
                    </a>

                    <a href="/produkHukum"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4">
                            <i class="fa-solid fa-scale-balanced h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">
                            Produk Hukum Desa
                        </span>
                    </a>

                    <a href="/infodesa/produk"
                        class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent">
                        <div class="flex aspect-square items-center justify-center rounded-full bg-zinc-500 p-4">
                            {{-- <i class="fa-solid fa-phone h-12 w-12 text-zinc-50"></i> --}}
                            <i class="fa-solid fa-people-carry-box h-12 w-12 text-zinc-50"></i>
                        </div>
                        <span class="text-lg font-semibold">Produk UMKM Desa</span>
                    </a>
                </div>
            </div>

            <div class="absolute left-0 top-20 sm:top-10 md:top-10 h-full w-full">
                <x-ui.carousel.root id="hero-carousel"
                    class="h-full before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:z-[1] before:bg-opacity-50 before:bg-dark-transparent-dark-gradient">
                    <x-ui.carousel.content id="hero-carousel-content" class="h-full">
                        @foreach ($slide as $heroImage)
                            <x-ui.carousel.item>
                                <img id="{{ $heroImage['id'] }}" src="/storage/{{ $heroImage['gambar'] }}"
                                    alt="{{ $heroImage['judul'] }}" class="h-full w-full object-cover" />
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.content>
                </x-ui.carousel.root>
            </div>
        </section>

        <section id="section-profile-video" class="videinfo">
            <div class="fade-in container mt-80 py-12 sm:mt-[250px] md:mt-[225px] lg:mt-[225px] xl:mt-[225px]">
                <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                    <h1 class="font-bold text-green-900">
                        Video Profil
                        <b class="text-black">Tegalmanggung</b>
                        <div class="ml-[35%] h-[2px] w-[10%] shrink-0 bg-green-900"></div>
                    </h1>
                </div>

                <p class="text-center text-xl text-muted-foreground">
                    Video yang menggambarkan jalan Menuju Desa Tegal Manggung
                    Kec.Cimanggung Kab. Sumedang
                </p>

                <div class="mx-auto mt-6 aspect-video w-full max-w-screen-lg md:px-8">
                    @if ($videoUrl)
                        <video class="h-full w-full" controls>
                            <source src="{{ $videoUrl }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/dVzUtJBCuFk?si=vV-gzzzDLl5TNcgl"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @endif
                </div>
            </div>
        </section>

        <!-- Infografis Kependudukan -->
        <section id="section-kependudukan" class="infografis">
            <div class="fade-in container space-y-8 py-12 md:space-y-16">
                <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                    <h1 class="font-bold text-white">
                        Infografis
                        <b class="text-[#FCE5AD]">Tegalmanggung</b>
                        <div class="ml-[35%] h-[2px] w-[10%] shrink-0 bg-white"></div>
                    </h1>
                </div>

                <div class="mx-auto flex flex-col md:flex-row max-w-screen-lg space-y-8 md:space-y-0 md:space-x-8">
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center">
                        <div class="bg-[#FCE5AD] pl-[40px] shadow-lg pr-[40px] mt-[50px] rounded-md">
                            <div class="flex aspect-square items-center justify-center rounded-full">
                                <i class="fa-solid fa-user h-12 w-12 text-[#2C5D3C]"></i>
                            </div>
                            <div class="mt-[-35px] mb-[20px]">
                                <h6 class="text-lg font-semibold">Penduduk Pria</h6>
                                <p>{{ $totalPendudukLakiLaki }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center ">
                        <div class="bg-[#FCE5AD] pl-[40px] shadow-lg pr-[40px] mt-[-40px] rounded-md">
                            <div class="flex aspect-square items-center justify-center rounded-full ">
                                <i class="fa-solid fa-users h-24 w-24 text-[#2C5D3C]"></i>
                            </div>
                            <div class="mt-[-20px] mb-[20px]">
                                <h6 class="text-lg font-semibold">Total Penduduk</h6>
                                <p>{{ $totalPenduduk }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center">
                        <div class="bg-[#FCE5AD] pl-[40px] shadow-lg pr-[40px] mt-[50px] rounded-md">
                            <div class="flex aspect-square items-center justify-center rounded-full">
                                <i class="fa-solid fa-user h-12 w-12 text-[#2C5D3C]"></i>
                            </div>
                            <div class="mt-[-35px] mb-[20px]">
                                <h6 class="text-lg font-semibold">Penduduk Wanita</h6>
                                <p>{{ $totalPendudukPerempuan }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex h-full w-full flex-row justify-center items-center p-4">
                    <div class="bg-[#FCE5AD] p-6 rounded-lg shadow-lg flex flex-col items-center space-y-6">
                        <div
                            class="aspect-square p-4 rounded-full bg-[#FCE5AD] flex items-center justify-center mb-[-10px] mt-[-75px]">
                            <i class="fa-solid fa-map text-[#2C5D3C] text-6xl"></i>
                        </div>
                        <div class="flex flex-row space-x-8">
                            <div class="text-center">
                                <h6 class="text-lg font-semibold">Luas Tanah Kas Desa</h6>
                                <p class="flex items-center justify-center">
                                    <span>2.500 m</span>
                                    <sup>2</sup>
                                </p>
                            </div>
                            <div class="text-center">
                                <h6 class="text-lg font-semibold">Luas Tanah Di Desa</h6>
                                <p class="flex items-center justify-center">
                                    <span>67</span>
                                </p>
                            </div>
                            <div class="text-center">
                                <h6 class="text-lg font-semibold">Luas DHKP</h6>
                                <p class="flex items-center justify-center">
                                    <span>4.560.000 m</span>
                                    <sup>2</sup>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <x-ui.button class="w-full max-w-80 bg-black hover:bg-white hover:text-black">
                        <a href="/infografis">Selengkapnya</a>
                    </x-ui.button>
                </div>
            </div>
        </section>

        {{-- <div class="container py-12">
            <hr class="h-[1px] w-full shrink-0 bg-border" />
        </div> --}}

        <section id="section-berita-kependudukan" class="fade-in container pt-6 ">
            <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                <h1 class="font-bold text-green-900">
                    Berita
                    <b class="text-black">Tegalmanggung</b>
                    <div class="ml-[25%] h-[2px] w-[10%] shrink-0 bg-green-900"></div>
                </h1>
            </div>
            <p class="text-center text-xl text-muted-foreground">
                Berita yang disediakan seputar kegiatan dan juga agenda
                kelurahan Jayawaras
            </p>

            <div class="mt-6">
                <x-ui.carousel.root id="news-carousel" class="h-full">
                    <x-ui.carousel.content id="news-carousel-content" class="-ml-6 h-full lg:-ml-12">
                        @foreach ($berita as $newsItem)
                            <x-ui.carousel.item class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12">
                                <x-ui.card.root>
                                    <img class="h-48 w-full object-cover object-top"
                                        src="/storage/{{ $newsItem['gambar'] }}"
                                        alt="{{ $newsItem['judul'] . 'gambar' }}" />

                                    <x-ui.card.header>
                                        <div class="flex items-center justify-between">
                                            <x-ui.card.title class="max-w-[65%] truncate">
                                                {{ $newsItem['judul'] }}
                                            </x-ui.card.title>

                                            <span class="text-xs text-muted-foreground">
                                                {{ \Carbon\Carbon::parse($newsItem['tanggal'])->format('Y-m-d') }}
                                                <i class="fa-regular fa-calendar ml-1"></i>
                                            </span>
                                        </div>
                                        <x-ui.card.description class="line-clamp-3">
                                            {{ Str::limit(strip_tags($newsItem->konten), 150) }}
                                        </x-ui.card.description>
                                    </x-ui.card.header>

                                    <x-ui.card.footer class="justify-end">
                                        <x-ui.button variant="ghost"
                                            href="{{ route('info.show', ['title' => 'Berita', 'id' => Crypt::encryptString($newsItem->id)]) }}">
                                            Baca Selengkapnya
                                        </x-ui.button>
                                    </x-ui.card.footer>
                                </x-ui.card.root>
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.content>
                </x-ui.carousel.root>
            </div>

            <div class="mt-6 flex justify-center">
                <x-ui.button href="/infodesa/berita" class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500">
                    Lihat Lebih Banyak
                </x-ui.button>
            </div>
        </section>

        <section id="section-berita-penghargaan" class="fade-in container mt-6 pt-12 ">
            <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                <h1 class="font-bold text-green-900">
                    Penghargaan
                    <b class="text-black">Tegalmanggung</b>
                    <div class="ml-[40%] h-[2px] w-[10%] shrink-0 bg-green-900"></div>
                </h1>
            </div>
            <p class="text-center text-xl text-muted-foreground">
                Penghargaan Yang di raih oleh Tegalmanggung
            </p>

            <div class="mt-6">
                <x-ui.carousel.root id="news-award-carousel" class="h-full">
                    <x-ui.carousel.content id="news-award-carousel-content" class="-ml-6 h-full lg:-ml-12">
                        @foreach ($penghargaan as $newsItem)
                            <x-ui.carousel.item class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12">
                                <x-ui.card.root>
                                    <img class="h-48 w-full object-cover object-top"
                                        src="/storage/{{ $newsItem['gambar'] }}"
                                        alt="{{ $newsItem['judul'] . 'gambar' }}" />

                                    <x-ui.card.header>
                                        <div class="flex items-center justify-between">
                                            <x-ui.card.title class="max-w-[65%] truncate">
                                                {{ $newsItem['judul'] }}
                                            </x-ui.card.title>

                                            <span class="text-xs text-muted-foreground">
                                                {{ \Carbon\Carbon::parse($newsItem->tanggal)->format('Y-m-d') }}
                                                <i class="fa-regular fa-calendar ml-1"></i>
                                            </span>
                                        </div>
                                        <x-ui.card.description class="line-clamp-3">
                                            {{ Str::limit(strip_tags($newsItem->konten), 150) }}
                                        </x-ui.card.description>
                                    </x-ui.card.header>

                                    <x-ui.card.footer class="justify-end">
                                        <x-ui.button variant="ghost"
                                            href="{{ route('info.show', ['title' => 'Penghargaan', 'id' => Crypt::encryptString($newsItem->id)]) }}">
                                            Baca Selengkapnya
                                        </x-ui.button>
                                    </x-ui.card.footer>
                                </x-ui.card.root>
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.content>
                </x-ui.carousel.root>
            </div>

            <div class="mt-6 flex justify-center">
                <x-ui.button class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                    href="/infodesa/penghargaan">
                    Lihat Lebih Banyak
                </x-ui.button>
            </div>
        </section>

        <!-- Galeri -->
        <section class="galeri fade-in">
            <div class="container mt-6 pt-12">
                <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                    <h1 class="font-bold text-white">
                        Galeri
                        <b class="text-cream">Tegalmanggung</b>
                        <div class="ml-[22%] h-[2px] w-[10%] shrink-0 bg-white"></div>
                    </h1>
                    <p class="text-white text-center text-xl text-muted-foreground">
                        Slide gambar untuk melihat yang lainnya
                    </p>
                </div>
                <div class="mt-12 ">
                    <x-ui.carousel.root id="umkm-carousel" class="h-full">
                        <x-ui.carousel.content id="umkm-carousel-content" class="h-full lg:ml-0">
                            @foreach ($galeriImages as $newsItem)
                                <x-ui.carousel.item class="sm:basis-1/2 lg:basis-1/3  align-middle">
                                    <img class="align-middle" width="500px"
                                        src="/storage/{{ $newsItem['gambar'] }}"
                                        alt="{{ $newsItem['judul'] . ' Image' }}" />
                                </x-ui.carousel.item>
                            @endforeach
                        </x-ui.carousel.content>
                    </x-ui.carousel.root>
                </div>
                {{-- <div class="mt-8 mx-auto max-w-screen-lg">
                    <div class="embla">
                        <div class="embla__viewport">
                            <div class="embla__container">
                                @foreach ($galeriImages as $image)
                                    <div class="embla__slide">
                                        <img src="{{ asset('storage/' . $image->gambar) }}" alt="Image"
                                            class="object-cover h-60 rounded-md">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        <section id="section-wisata-alam" class="fade-in container mt-6 pt-12 ">
            <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                <h1 class="font-bold text-green-900">
                    Wisata
                    <b class="text-black">Tegalmanggung</b>
                    <div class="ml-[25%] h-[2px] w-[10%] shrink-0 bg-green-900"></div>
                </h1>
            </div>
            <p class="text-center text-xl text-muted-foreground">
                Rekomendasi Wisata Alam yang ada Di desa Tegal Manggung
            </p>

            <div class="mt-6">
                <x-ui.carousel.root id="natural-tourism-carousel" class="h-full">
                    <x-ui.carousel.content id="natural-tourism-carousel-content" class="-ml-6 h-full lg:-ml-12">
                        @foreach ($wisata as $newsItem)
                            <x-ui.carousel.item class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12">
                                <x-ui.card.root>
                                    <img class="h-48 w-full object-cover object-top"
                                        src="/storage/{{ $newsItem['gambar'] }}"
                                        alt="{{ $newsItem['judul'] . 'gambar' }}" />

                                    <x-ui.card.header>
                                        <div class="flex items-center justify-between">
                                            <x-ui.card.title class="max-w-[65%] truncate">
                                                {{ $newsItem['judul'] }}
                                            </x-ui.card.title>

                                            <span class="text-xs text-muted-foreground">
                                                {{ $newsItem['created_at']->format('Y-m-d') }}
                                                <i class="fa-regular fa-calendar ml-1"></i>
                                            </span>
                                        </div>
                                        <x-ui.card.description class="line-clamp-3">
                                            {{ Str::limit(strip_tags($newsItem->konten), 150) }}
                                        </x-ui.card.description>
                                    </x-ui.card.header>

                                    <x-ui.card.footer class="justify-end">
                                        <x-ui.button variant="ghost"
                                            href="{{ route('info.show', ['title' => 'Wisata', 'id' => Crypt::encryptString($newsItem->id)]) }}">
                                            Baca Selengkapnya
                                        </x-ui.button>
                                    </x-ui.card.footer>
                                </x-ui.card.root>
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.content>
                </x-ui.carousel.root>
            </div>

            <div class="mt-6 flex justify-center">
                <x-ui.button class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500" href="/infodesa/wisata">
                    Lihat Lebih Banyak
                </x-ui.button>
            </div>
        </section>

        <section id="section-produk-umkm" class="fade-in container mt-6 pt-12">
            <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                <h1 class="font-bold text-green-900">
                    Produk UMKM
                    <b class="text-black">Tegalmanggung</b>
                    <div class="ml-[40%] h-[2px] w-[10%] shrink-0 bg-green-900"></div>
                </h1>
            </div>
            <p class="text-center text-xl text-muted-foreground">
                Rekomendasi Produk UMKM yang ada Di desa Tegal Manggung
            </p>

            <div class="mt-6">
                <x-ui.carousel.root id="umkm-carousel" class="h-full">
                    <x-ui.carousel.content id="umkm-carousel-content" class="-ml-6 h-full lg:-ml-12">
                        @foreach ($produk as $newsItem)
                            <x-ui.carousel.item class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12">
                                <x-ui.card.root>
                                    <img class="h-48 w-full object-cover object-top"
                                        src="/storage/{{ $newsItem['gambar'] }}"
                                        alt="{{ $newsItem['judul'] . 'gambar' }}" />

                                    <x-ui.card.header>
                                        <div class="flex items-center justify-between">
                                            <x-ui.card.title class="max-w-[65%] truncate">
                                                {{ $newsItem['judul'] }}
                                            </x-ui.card.title>

                                            <span class="text-xs text-muted-foreground">
                                                {{ $newsItem['created_at']->format('Y-m-d') }}
                                                <i class="fa-regular fa-calendar ml-1"></i>
                                            </span>
                                        </div>
                                        <x-ui.card.description class="line-clamp-3">
                                            {{ Str::limit(strip_tags($newsItem->konten), 150) }}
                                        </x-ui.card.description>
                                    </x-ui.card.header>

                                    <x-ui.card.footer class="justify-end">
                                        <x-ui.button variant="ghost"
                                            href="{{ route('info.show', ['title' => 'Produk', 'id' => Crypt::encryptString($newsItem->id)]) }}">
                                            Baca Selengkapnya
                                        </x-ui.button>
                                    </x-ui.card.footer>
                                </x-ui.card.root>
                            </x-ui.carousel.item>
                        @endforeach
                    </x-ui.carousel.content>
                </x-ui.carousel.root>
            </div>

            <div class="mt-6 flex justify-center">
                <x-ui.button class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500" href="/infodesa/produk">
                    Lihat Lebih Banyak
                </x-ui.button>
            </div>
        </section>

        <section id="section-layanan"
            class="fade-in container my-6 flex flex-col gap-x-12 gap-y-6 py-12 sm:flex-row sm:justify-center">
            {{-- <x-ui.card.root class="sm:min relative overflow-hidden bg-green-pea-700 text-zinc-50 md:min-w-[320px]">
                <i
                    class="fa-solid fa-file-lines absolute -right-10 -top-5 h-32 w-32 text-green-pea-700 brightness-125"></i>

                <x-ui.card.header class="relative z-[1]">
                    <x-ui.card.title>Lembaga Desa</x-ui.card.title>
                </x-ui.card.header>
                <x-ui.card.content class="relative z-[1]">
                    <ul class="flex flex-col">
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="#">
                                Lorem ipsum dolor sit.
                            </x-ui.button>
                        </li>
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="#">
                                Lorem ipsum dolor sit.
                            </x-ui.button>
                        </li>
                    </ul>
                </x-ui.card.content>

                <x-ui.card.footer class="relative z-[1] justify-end bg-green-pea-600 pb-4 pt-3">
                    <x-ui.button class="text-zinc-50" variant="link" href="/apbdes">
                        Selengkapnya
                    </x-ui.button>
                </x-ui.card.footer>
            </x-ui.card.root> --}}
            <x-ui.card.root class="sm:min relative overflow-hidden bg-green-pea-700 text-zinc-50 md:min-w-[320px]">
                <i
                    class="fa-solid fa-scale-balanced absolute -right-10 -top-5 h-32 w-32 text-green-pea-700 brightness-125"></i>

                <x-ui.card.header class="relative z-[1]">
                    <x-ui.card.title>Produk Hukum</x-ui.card.title>
                </x-ui.card.header>
                <x-ui.card.content class="relative z-[1]">
                    <ul class="flex flex-col">
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="/produkHukum">
                                Hukum Desa
                            </x-ui.button>
                        </li>
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="/produkHukum">
                                Hukum Kepala Desa
                            </x-ui.button>
                        </li>
                    </ul>
                </x-ui.card.content>

                <x-ui.card.footer class="relative z-[1] justify-end bg-green-pea-600 pb-4 pt-3">
                    <x-ui.button class="text-zinc-50" variant="link" href="/produkHukum">
                        Selengkapnya
                    </x-ui.button>
                </x-ui.card.footer>
            </x-ui.card.root>

            <x-ui.card.root class="sm:min relative overflow-hidden bg-green-pea-700 text-zinc-50 md:min-w-[320px]">
                <i
                    class="fa-solid fa-file-lines absolute -right-10 -top-5 h-32 w-32 text-green-pea-700 brightness-125"></i>

                <x-ui.card.header class="relative z-[1]">
                    <x-ui.card.title>Pengajuan Surat</x-ui.card.title>
                </x-ui.card.header>
                <x-ui.card.content class="relative z-[1]">
                    <ul class="flex flex-col">
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="/status">
                                Cek surat
                            </x-ui.button>
                        </li>
                        <li>
                            <x-ui.button class="text-zinc-50" variant="link" href="/pengajuan">
                                Buat Surat
                            </x-ui.button>
                        </li>
                    </ul>
                </x-ui.card.content>

                <x-ui.card.footer class="relative z-[1] justify-end bg-green-pea-600 pb-4 pt-3">
                    <x-ui.button class="text-zinc-50" variant="link" href="/pengajuan">
                        Selengkapnya
                    </x-ui.button>
                </x-ui.card.footer>
            </x-ui.card.root>
        </section>
    </main>

    {{-- <x-common.footer /> --}}
    <x-common.footer :kontak="$kontaks" />

    <x-ui.carousel.script id="hero-carousel"></x-ui.carousel.script>
    <x-ui.carousel.script id="news-carousel"></x-ui.carousel.script>
    <x-ui.carousel.script id="news-award-carousel"></x-ui.carousel.script>
    <x-ui.carousel.script id="gallery-carousel"></x-ui.carousel.script>
    <x-ui.carousel.script id="natural-tourism-carousel"></x-ui.carousel.script>
    <x-ui.carousel.script id="umkm-carousel"></x-ui.carousel.script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll('.fade-in');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });

            const emblaNode = document.querySelector('.embla');
            const viewportNode = emblaNode.querySelector('.embla__viewport');
            const containerNode = emblaNode.querySelector('.embla__container');

            const embla = EmblaCarousel(viewportNode, {
                loop: true
            });
            const autoplay = EmblaCarouselAutoplay({
                delay: 3000
            });

            embla.on('init', () => {
                autoplay.start();
            });

            embla.on('select', () => {
                autoplay.restart();
            });

            embla.init();
        });
    </script>
</body>

</html>
