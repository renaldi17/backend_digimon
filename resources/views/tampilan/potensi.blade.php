<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Potensi Desa</title>

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        @vite('resources/css/app.css')
        <script
            src="https://kit.fontawesome.com/89851fc4a2.js"
            crossorigin="anonymous"
        ></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </head>

    <body>
        <x-common.navbar />

        <main class="min-h-screen my-24">
            <section class="container mt-6 py-6 flex flex-col gap-4">
                <h2 class="font-poppins text-3xl font-semibold text-center">
                    Wisata Tegal Manggung
                </h2>

                <div class="text-sm text-center text-gray-600">
                    <p>
                        Tegal Manggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($wisata as $wisataItem)
                        <x-ui.card.root>
                            <img
                                class="h-48 w-full object-cover object-top"
                                src="{{ $wisataItem["image"] }}"
                                alt="{{ $wisataItem["title"] . " Image" }}"
                            />

                            <x-ui.card.header>
                                <div
                                    class="flex items-center justify-between"
                                >
                                    <x-ui.card.title
                                        class="max-w-[65%] truncate"
                                    >
                                        {{ $wisataItem["title"] }}
                                    </x-ui.card.title>

                                    <span
                                        class="text-xs text-muted-foreground"
                                    >
                                        {{ $wisataItem["publishedAt"]->format("Y-m-d") }}
                                        <i
                                            class="fa-regular fa-calendar ml-1"
                                        ></i>
                                    </span>
                                </div>
                                <x-ui.card.description
                                    class="line-clamp-3"
                                >
                                    {{ $wisataItem["description"] }}
                                </x-ui.card.description>
                            </x-ui.card.header>

                            <x-ui.card.footer class="justify-end">
                                <x-ui.button
                                    variant="ghost"
                                    href="/wisata/{{ $wisataItem['slug'] }}"
                                >
                                    Baca Selengkapnya
                                </x-ui.button>
                            </x-ui.card.footer>
                        </x-ui.card.root>
                    @endforeach
                </div>
            </section>

            <section class="container mt-6 py-6 flex flex-col gap-4">
                <h2 class="font-poppins text-3xl font-semibold text-center">
                    Produk UMKM Tegal Manggung
                </h2>

                <div class="text-sm text-center text-gray-600">
                    <p>
                        Tidak hanya wisata alam yang banyak, Tegal Manggung memiliki kekayaan alam juga yang melimpah.
                    </p>

                    <p>
                        Hal ini dibuktikan dengan banyaknya produk UMKM yang dihasilkan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($produk as $produkItem)
                        <x-ui.card.root>
                            <img
                                class="h-48 w-full object-cover object-top"
                                src="{{ $produkItem["image"] }}"
                                alt="{{ $produkItem["title"] . " Image" }}"
                            />

                            <x-ui.card.header>
                                <div
                                    class="flex items-center justify-between"
                                >
                                    <x-ui.card.title
                                        class="max-w-[65%] truncate"
                                    >
                                        {{ $produkItem["title"] }}
                                    </x-ui.card.title>

                                    <span
                                        class="text-xs text-muted-foreground"
                                    >
                                        {{ $produkItem["publishedAt"]->format("Y-m-d") }}
                                        <i
                                            class="fa-regular fa-calendar ml-1"
                                        ></i>
                                    </span>
                                </div>
                                <x-ui.card.description
                                    class="line-clamp-3"
                                >
                                    {{ $produkItem["description"] }}
                                </x-ui.card.description>
                            </x-ui.card.header>

                            <x-ui.card.footer class="justify-end">
                                <x-ui.button
                                    variant="ghost"
                                    href="/produk/{{ $produkItem['slug'] }}"
                                >
                                    Baca Selengkapnya
                                </x-ui.button>
                            </x-ui.card.footer>
                        </x-ui.card.root>
                    @endforeach
                </div>
            </section>
        </main>

        <x-common.footer />
    </body>
</html>
