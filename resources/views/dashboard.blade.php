<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        @vite("resources/css/app.css")

        <script
            src="https://kit.fontawesome.com/89851fc4a2.js"
            crossorigin="anonymous"
        ></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
        <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

        <title>Website Desa Tegal Manggung</title>
    </head>

    <body>
        <x-common.navbar />

        <main class="min-h-screen">
            <section
                class="min-[512px] container relative h-screen max-h-[680px] pt-16 md:pt-32"
            >
                <div
                    class="relative z-10 mt-4 flex max-w-screen-lg flex-col gap-y-2 text-zinc-50 lg:container xl:pl-48"
                >
                    <div>
                        <h2
                            class="scroll-m-20 text-pretty pb-2 text-3xl font-semibold tracking-tight first:mt-0"
                        >
                            SELAMAT DATANG DI DESA TEGAL MANGGUNG
                        </h2>
                        <p class="text-pretty text-xl text-muted">
                            Kawasan Desa Alpukat
                        </p>
                    </div>

                    <div class="flex gap-x-2">
                        <x-ui.button size="icon" variant="ghost" href="#">
                            <i
                                class="fa-brands fa-square-instagram h-8 w-8"
                            ></i>
                        </x-ui.button>
                        <x-ui.button size="icon" variant="ghost" href="#">
                            <i class="fa-brands fa-square-whatsapp h-8 w-8"></i>
                        </x-ui.button>
                    </div>
                </div>

                <div
                    class="container absolute left-0 right-0 top-80 z-10 max-w-screen-lg lg:top-[512px]"
                >
                    <div
                        class="grid grid-cols-2 justify-items-center gap-2 rounded-md bg-background sm:grid-cols-4"
                    >
                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-blue-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-book-open h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Profil Desa
                            </span>
                        </a>
                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4"
                            >
                                <i
                                    class="fa-regular fa-file-lines h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Pengajuan Surat
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-yellow-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-chart-pie h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Infografis Data
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-orange-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-palette h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Potensi Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-green-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-box-archive h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Keuangan Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-indigo-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-bullhorn h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">Pengaduan</span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-scale-balanced h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Produk Hukum Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-zinc-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-phone h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">Kontak</span>
                        </a>
                    </div>
                </div>

                <div class="absolute left-0 top-0 h-full w-full">
                    <x-ui.carousel.root
                        id="hero-carousel"
                        class="h-full before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:z-[1] before:bg-opacity-50 before:bg-dark-transparent-dark-gradient"
                    >
                        <x-ui.carousel.content
                            id="hero-carousel-content"
                            class="h-full"
                        >
                            @foreach ($heroImages as $heroImage)
                                <x-ui.carousel.item>
                                    <img
                                        id="{{ $heroImage["id"] }}"
                                        src="{{ $heroImage["url"] }}"
                                        alt="{{ $heroImage["title"] }}"
                                        class="h-full w-full object-cover"
                                    />
                                </x-ui.carousel.item>
                            @endforeach
                        </x-ui.carousel.content>
                    </x-ui.carousel.root>
                </div>
            </section>

            <section class="container mt-80 py-12 sm:mt-12 md:mt-6 lg:mt-52">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight first:mt-0"
                >
                    Video Profil Desa Tegal Manggung
                </h2>

                <p class="text-center text-xl text-muted-foreground">
                    video yang menggambarkan jalan Menuju Desa Tegal Manggung
                    Jl. No., Kel., Kec. Kab. Sumedang
                </p>

                <div
                    class="mx-auto mt-6 aspect-video w-full max-w-screen-lg md:px-8"
                >
                    <iframe
                        class="h-full w-full"
                        src="https://www.youtube.com/embed/LXb3EKWsInQ?si=fsZZbZr7t-vuSXzR"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
            </section>

            <section class="container space-y-8 py-12 md:space-y-16">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight first:mt-0"
                >
                    Informasi Tegal Manggung
                </h2>

                <div class="mx-auto flex max-w-screen-lg">
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center"
                    >
                        <div
                            class="flex aspect-square items-center justify-center rounded-full"
                        >
                            <i
                                class="fa-solid fa-user h-12 w-12 text-zinc-800"
                            ></i>
                        </div>
                        <div>
                            <h6 class="text-lg font-semibold">Penduduk Pria</h6>
                            <p>67</p>
                        </div>
                    </div>
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center"
                    >
                        <div
                            class="flex aspect-square items-center justify-center rounded-full"
                        >
                            <i
                                class="fa-solid fa-users h-24 w-24 text-zinc-800"
                            ></i>
                        </div>
                        <div>
                            <h6 class="text-lg font-semibold">
                                Total Penduduk
                            </h6>
                            <p>245</p>
                        </div>
                    </div>
                    <div
                        class="flex h-full w-full flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center"
                    >
                        <div
                            class="flex aspect-square items-center justify-center rounded-full"
                        >
                            <i
                                class="fa-solid fa-user h-12 w-12 text-zinc-800"
                            ></i>
                        </div>
                        <div>
                            <h6 class="text-lg font-semibold">
                                Penduduk Wanita
                            </h6>
                            <p>99</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div
                        class="flex h-full w-full flex-row justify-center gap-x-2 md:gap-x-8"
                    >
                        <div class="flex aspect-square p-4">
                            <i
                                class="fa-solid fa-chart-pie h-32 w-32 text-zinc-800"
                            ></i>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <h6 class="text-lg font-semibold">
                                    Luas Tanah Kas Desa
                                </h6>
                                <p class="flex items-center">
                                    <span>2.500 m</span>
                                    <sup>2</sup>
                                </p>
                            </div>
                            <div>
                                <h6 class="text-lg font-semibold">
                                    Luas Tanah Di Desa
                                </h6>
                                <p class="flex items-center">
                                    <span>67</span>
                                </p>
                            </div>
                            <div>
                                <h6 class="text-lg font-semibold">Luas DHKP</h6>
                                <p class="flex items-center">
                                    <span>4.560.000 m</span>
                                    <sup>2</sup>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <x-ui.button
                        class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                    >
                        Selengkapnya
                    </x-ui.button>
                </div>
            </section>

            <div class="container py-12">
                <hr class="h-[1px] w-full shrink-0 bg-border" />
            </div>

            <section class="container pt-6">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight text-green-pea-600 first:mt-0"
                >
                    Berita Kependudukan
                </h2>
                <p class="text-center text-xl text-muted-foreground">
                    Berita yang disediakan seputar kegiatan dan juga agenda
                    kelurahan Jayawaras
                </p>

                <div class="mt-6">
                    <x-ui.carousel.root id="news-carousel" class="h-full">
                        <x-ui.carousel.content
                            id="news-carousel-content"
                            class="-ml-6 h-full lg:-ml-12"
                        >
                            @foreach ($news as $newsItem)
                                <x-ui.carousel.item
                                    class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12"
                                >
                                    <x-ui.card.root>
                                        <img
                                            class="h-48 w-full object-cover object-top"
                                            src="{{ $newsItem["image"] }}"
                                            alt="{{ $newsItem["title"] . " Image" }}"
                                        />

                                        <x-ui.card.header>
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <x-ui.card.title
                                                    class="max-w-[65%] truncate"
                                                >
                                                    {{ $newsItem["title"] }}
                                                </x-ui.card.title>

                                                <span
                                                    class="text-xs text-muted-foreground"
                                                >
                                                    {{ $newsItem["publishedAt"]->format("Y-m-d") }}
                                                    <i
                                                        class="fa-regular fa-calendar ml-1"
                                                    ></i>
                                                </span>
                                            </div>
                                            <x-ui.card.description
                                                class="line-clamp-3"
                                            >
                                                {{ $newsItem["description"] }}
                                            </x-ui.card.description>
                                        </x-ui.card.header>

                                        <x-ui.card.footer class="justify-end">
                                            <x-ui.button
                                                variant="ghost"
                                                href="/news/{{  $newsItem['slug'] }}"
                                            >
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
                    <x-ui.button
                        href="#"
                        class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                    >
                        Lihat Lebih Banyak
                    </x-ui.button>
                </div>
            </section>

            <section class="container mt-6 pt-12">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight text-green-pea-600 first:mt-0"
                >
                    Berita Penghargaan
                </h2>
                <p class="text-center text-xl text-muted-foreground">
                    Berita yang disediakan seputar kegiatan dan juga agenda
                    kelurahan Jayawaras
                </p>

                <div class="mt-6">
                    <x-ui.carousel.root id="news-award-carousel" class="h-full">
                        <x-ui.carousel.content
                            id="news-award-carousel-content"
                            class="-ml-6 h-full lg:-ml-12"
                        >
                            @foreach ($news as $newsItem)
                                <x-ui.carousel.item
                                    class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12"
                                >
                                    <x-ui.card.root>
                                        <img
                                            class="h-48 w-full object-cover object-top"
                                            src="{{ $newsItem["image"] }}"
                                            alt="{{ $newsItem["title"] . " Image" }}"
                                        />

                                        <x-ui.card.header>
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <x-ui.card.title
                                                    class="max-w-[65%] truncate"
                                                >
                                                    {{ $newsItem["title"] }}
                                                </x-ui.card.title>

                                                <span
                                                    class="text-xs text-muted-foreground"
                                                >
                                                    {{ $newsItem["publishedAt"]->format("Y-m-d") }}
                                                    <i
                                                        class="fa-regular fa-calendar ml-1"
                                                    ></i>
                                                </span>
                                            </div>
                                            <x-ui.card.description
                                                class="line-clamp-3"
                                            >
                                                {{ $newsItem["description"] }}
                                            </x-ui.card.description>
                                        </x-ui.card.header>

                                        <x-ui.card.footer class="justify-end">
                                            <x-ui.button
                                                variant="ghost"
                                                href="/news/{{  $newsItem['slug'] }}"
                                            >
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
                    <x-ui.button
                        class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                        href="#"
                    >
                        Lihat Lebih Banyak
                    </x-ui.button>
                </div>
            </section>

            <section class="container mt-6 pt-12">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight text-green-pea-600 first:mt-0"
                >
                    Wisata Alam
                </h2>
                <p class="text-center text-xl text-muted-foreground">
                    Rekomendasi Wisata Alam yang ada Di desa Tegal Manggung
                </p>

                <div class="mt-6">
                    <x-ui.carousel.root
                        id="natural-tourism-carousel"
                        class="h-full"
                    >
                        <x-ui.carousel.content
                            id="natural-tourism-carousel-content"
                            class="-ml-6 h-full lg:-ml-12"
                        >
                            @foreach ($news as $newsItem)
                                <x-ui.carousel.item
                                    class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12"
                                >
                                    <x-ui.card.root>
                                        <img
                                            class="h-48 w-full object-cover object-top"
                                            src="{{ $newsItem["image"] }}"
                                            alt="{{ $newsItem["title"] . " Image" }}"
                                        />

                                        <x-ui.card.header>
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <x-ui.card.title
                                                    class="max-w-[65%] truncate"
                                                >
                                                    {{ $newsItem["title"] }}
                                                </x-ui.card.title>

                                                <span
                                                    class="text-xs text-muted-foreground"
                                                >
                                                    {{ $newsItem["publishedAt"]->format("Y-m-d") }}
                                                    <i
                                                        class="fa-regular fa-calendar ml-1"
                                                    ></i>
                                                </span>
                                            </div>
                                            <x-ui.card.description
                                                class="line-clamp-3"
                                            >
                                                {{ $newsItem["description"] }}
                                            </x-ui.card.description>
                                        </x-ui.card.header>

                                        <x-ui.card.footer class="justify-end">
                                            <x-ui.button
                                                variant="ghost"
                                                href="/news/{{  $newsItem['slug'] }}"
                                            >
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
                    <x-ui.button
                        class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                        href="#"
                    >
                        Lihat Lebih Banyak
                    </x-ui.button>
                </div>
            </section>

            <section class="container mt-6 pt-12">
                <h2
                    class="scroll-m-20 pb-2 text-center text-3xl font-semibold tracking-tight text-green-pea-600 first:mt-0"
                >
                    Produk UMKM
                </h2>
                <p class="text-center text-xl text-muted-foreground">
                    Rekomendasi Produk UMKM yang ada Di desa Tegal Manggung
                </p>

                <div class="mt-6">
                    <x-ui.carousel.root id="umkm-carousel" class="h-full">
                        <x-ui.carousel.content
                            id="umkm-carousel-content"
                            class="-ml-6 h-full lg:-ml-12"
                        >
                            @foreach ($news as $newsItem)
                                <x-ui.carousel.item
                                    class="pl-6 sm:basis-1/2 lg:basis-1/3 lg:pl-12"
                                >
                                    <x-ui.card.root>
                                        <img
                                            class="h-48 w-full object-cover object-top"
                                            src="{{ $newsItem["image"] }}"
                                            alt="{{ $newsItem["title"] . " Image" }}"
                                        />

                                        <x-ui.card.header>
                                            <div
                                                class="flex items-center justify-between"
                                            >
                                                <x-ui.card.title
                                                    class="max-w-[65%] truncate"
                                                >
                                                    {{ $newsItem["title"] }}
                                                </x-ui.card.title>

                                                <span
                                                    class="text-xs text-muted-foreground"
                                                >
                                                    {{ $newsItem["publishedAt"]->format("Y-m-d") }}
                                                    <i
                                                        class="fa-regular fa-calendar ml-1"
                                                    ></i>
                                                </span>
                                            </div>
                                            <x-ui.card.description
                                                class="line-clamp-3"
                                            >
                                                {{ $newsItem["description"] }}
                                            </x-ui.card.description>
                                        </x-ui.card.header>

                                        <x-ui.card.footer class="justify-end">
                                            <x-ui.button
                                                variant="ghost"
                                                href="/news/{{  $newsItem['slug'] }}"
                                            >
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
                    <x-ui.button
                        class="w-full max-w-80 bg-green-pea-600 hover:bg-green-pea-500"
                        href="#"
                    >
                        Lihat Lebih Banyak
                    </x-ui.button>
                </div>
            </section>

            <section
                class="container my-6 flex flex-col gap-x-12 gap-y-6 py-12 sm:flex-row sm:justify-center"
            >
                <x-ui.card.root
                    class="sm:min relative overflow-hidden bg-green-pea-700 text-zinc-50 md:min-w-[320px]"
                >
                    <i
                        class="fa-solid fa-scale-balanced absolute -right-10 -top-5 h-32 w-32 text-green-pea-700 brightness-125"
                    ></i>

                    <x-ui.card.header class="relative z-[1]">
                        <x-ui.card.title>Produk Hukum</x-ui.card.title>
                    </x-ui.card.header>
                    <x-ui.card.content class="relative z-[1]">
                        <ul class="flex flex-col">
                            <li>
                                <x-ui.button
                                    class="text-zinc-50"
                                    variant="link"
                                    href="#"
                                >
                                    Lorem ipsum dolor sit.
                                </x-ui.button>
                            </li>
                            <li>
                                <x-ui.button
                                    class="text-zinc-50"
                                    variant="link"
                                    href="#"
                                >
                                    Lorem ipsum dolor sit.
                                </x-ui.button>
                            </li>
                        </ul>
                    </x-ui.card.content>

                    <x-ui.card.footer
                        class="relative z-[1] justify-end bg-green-pea-600 pb-4 pt-3"
                    >
                        <x-ui.button
                            class="text-zinc-50"
                            variant="link"
                            href="#"
                        >
                            Selengkapnya
                        </x-ui.button>
                    </x-ui.card.footer>
                </x-ui.card.root>

                <x-ui.card.root
                    class="sm:min relative overflow-hidden bg-green-pea-700 text-zinc-50 md:min-w-[320px]"
                >
                    <i
                        class="fa-solid fa-file-lines absolute -right-10 -top-5 h-32 w-32 text-green-pea-700 brightness-125"
                    ></i>

                    <x-ui.card.header class="relative z-[1]">
                        <x-ui.card.title>Pengajuan Surat</x-ui.card.title>
                    </x-ui.card.header>
                    <x-ui.card.content class="relative z-[1]">
                        <ul class="flex flex-col">
                            <li>
                                <x-ui.button
                                    class="text-zinc-50"
                                    variant="link"
                                    href="#"
                                >
                                    Lorem ipsum dolor sit.
                                </x-ui.button>
                            </li>
                            <li>
                                <x-ui.button
                                    class="text-zinc-50"
                                    variant="link"
                                    href="#"
                                >
                                    Lorem ipsum dolor sit.
                                </x-ui.button>
                            </li>
                        </ul>
                    </x-ui.card.content>

                    <x-ui.card.footer
                        class="relative z-[1] justify-end bg-green-pea-600 pb-4 pt-3"
                    >
                        <x-ui.button
                            class="text-zinc-50"
                            variant="link"
                            href="#"
                        >
                            Selengkapnya
                        </x-ui.button>
                    </x-ui.card.footer>
                </x-ui.card.root>
            </section>
        </main>

        <x-common.footer />

        <x-ui.carousel.script id="hero-carousel"></x-ui.carousel.script>
        <x-ui.carousel.script id="news-carousel"></x-ui.carousel.script>
        <x-ui.carousel.script id="news-award-carousel"></x-ui.carousel.script>
        <x-ui.carousel.script
            id="natural-tourism-carousel"
        ></x-ui.carousel.script>
        <x-ui.carousel.script id="umkm-carousel"></x-ui.carousel.script>
    </body>
</html>