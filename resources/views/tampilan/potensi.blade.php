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

        @vite(['resources/css/app.css', 'resources/js/app.js'])
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

                <div class="wisata-cards">
                    <div class="relative my-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        </div>
                        <input
                            type="text"
                            name="wisata-search"
                            id="wisata-search"
                            class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            placeholder="Cari Tempat Wisata..."
                        >
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($wisata as $wisataItem)
                            <x-ui.card.root
                                class="wisata-item"
                                data-published-at="{{ $wisataItem['publishedAt']->format('Y-m-d') }}"
                                data-slug="{{ $wisataItem['slug'] }}"
                                data-title="{{ $wisataItem['title'] }}"
                                data-image="{{ $wisataItem['image'] }}"
                                data-description="{{ $wisataItem['description'] }}"
                            >
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
                                        href="{{ route('wisata.show', ['slug' => $wisataItem['slug']]) }}"
                                    >
                                        Baca Selengkapnya
                                    </x-ui.button>
                                </x-ui.card.footer>
                            </x-ui.card.root>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                        <div class="flex flex-1 justify-between sm:hidden">
                            <a href="#" class="wisata-prev-btn relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Sebelumnya</a>
                            <a href="#" class="wisata-next-btn relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Selanjutnya</a>
                        </div>

                        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Menampilkan
                                    <span id="wisata-showing-min" class="font-medium">1</span>
                                    hingga
                                    <span id="wisata-showing-max" class="font-medium">10</span>
                                    dari
                                    <span id="wisata-showing-total" class="font-medium">97</span>
                                    hasil
                                </p>
                            </div>

                            <div>
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                    <a href="#" class="wisata-prev-btn relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Sebelumnya</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                    <div id="wisata-pagination-numbers" class="pagination-numbers inline-flex">
                                        {{-- <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a> --}}
                                    </div>
                                    <a href="#" class="wisata-next-btn relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Next</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
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

                <div class="produk-cards">
                    <div class="relative my-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        </div>
                        <input
                            type="text"
                            name="produk-search"
                            id="produk-search"
                            class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            placeholder="Cari Produk UMKM..."
                        >
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($produk as $produkItem)
                            <x-ui.card.root
                                class="produk-item"
                                data-published-at="{{ $produkItem['publishedAt']->format('Y-m-d') }}"
                                data-slug="{{ $produkItem['slug'] }}"
                                data-title="{{ $produkItem['title'] }}"
                                data-image="{{ $produkItem['image'] }}"
                                data-description="{{ $produkItem['description'] }}"
                            >
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
                                        href="{{ route('produk-umkm.show', ['slug' => $produkItem['slug']]) }}"
                                    >
                                        Baca Selengkapnya
                                    </x-ui.button>
                                </x-ui.card.footer>
                            </x-ui.card.root>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                        <div class="flex flex-1 justify-between sm:hidden">
                            <a href="#" class="produk-prev-btn relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Sebelumnya</a>
                            <a href="#" class="produk-next-btn relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Selanjutnya</a>
                        </div>

                        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Menampilkan
                                    <span id="produk-showing-min" class="font-medium">1</span>
                                    hingga
                                    <span id="produk-showing-max" class="font-medium">10</span>
                                    dari
                                    <span id="produk-showing-total" class="font-medium">97</span>
                                    hasil
                                </p>
                            </div>

                            <div>
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                    <a href="#" class="produk-prev-btn relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Sebelumnya</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                    <div id="produk-pagination-numbers" class="pagination-numbers inline-flex">
                                        {{-- <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a> --}}
                                    </div>
                                    <a href="#" class="produk-next-btn relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Selanjutnya</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <x-common.footer />
    </body>
</html>
