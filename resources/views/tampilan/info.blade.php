<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Informasi Desa</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <x-common.navbar />
    <main class="min-h-screen my-24">
        <section class="bg-[#202020] h-[360px] w-[100%] pt-[80px]">
            <div class="container mt-6 py-6 flex flex-col gap-4">
                <div id="title" class="flex w-full flex-col items-center text-center text-4xl">
                    <h1 class="font-bold text-white mb-3">
                        {{ $title }}
                        <b class="text-[#33A478]">Tegalmanggung</b>
                        <div class="ml-[{{ $jarak }}] h-[2px] w-[10%] shrink-0 bg-white"></div>
                    </h1>
                    <div class="text-sm text-center text-white">
                        <p>
                            {{ $subtitle }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mt-6 py-6 flex flex-col gap-4">

            <div class="wisata-cards">

                <div class="wisata-cards">
                    <div class="relative my-2 rounded-md shadow-sm mb-5">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        </div>
                        <input type="text" name="wisata-search" id="wisata-search"
                            class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            placeholder="Cari Tempat Wisata...">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($data as $data)
                            <x-ui.card.root class="wisata-item" data-published-at="{{ $data->tanggal }}"
                                data-title="{{ $data->judul }}" data-image="{{ $data->gambar }}"
                                data-description="{{ $data->deskripsi }}">
                                <img class="h-48 w-full object-cover object-top" src="/storage/{{ $data->gambar }}"
                                    alt="{{ $data->judul . 'gambar' }}" />

                                <x-ui.card.header>
                                    <div class="flex items-center justify-between">
                                        <x-ui.card.title class="max-w-[65%] truncate">
                                            {{ $data->judul }}
                                        </x-ui.card.title>

                                        <span class="text-xs text-muted-foreground">
                                            {{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}
                                            <i class="fa-regular fa-calendar ml-1"></i>
                                        </span>
                                    </div>
                                    <x-ui.card.description class="line-clamp-3">
                                        <div class="line-clamp-3">
                                            {!! $data->deskripsi !!}
                                        </div>
                                    </x-ui.card.description>
                                </x-ui.card.header>

                                <x-ui.card.footer class="justify-end">
                                    <x-ui.button variant="ghost" href="">
                                        Baca Selengkapnya
                                    </x-ui.button>
                                </x-ui.card.footer>
                            </x-ui.card.root>
                        @endforeach
                    </div>

                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            {{-- <p class="text-sm text-gray-700">
                                Menampilkan
                                <span class="wisata-showing-min font-medium">1</span>
                                hingga
                                <span class="wisata-showing-max font-medium">10</span>
                                dari
                                <span class="wisata-showing-total font-medium">97</span>
                                hasil
                            </p> --}}
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
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                                    aria-label="Pagination">
                                    <a href="#"
                                        class="wisata-prev-btn relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Sebelumnya</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <div id="wisata-pagination-numbers" class="pagination-numbers inline-flex">
                                    </div>
                                    <a href="#"
                                        class="wisata-next-btn relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                        <span class="sr-only">Next</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-common.footer :kontak="$kontaks" />
    <script>
        function limitWords(element, wordLimit) {
            let text = element.textContent || element.innerText;
            let words = text.split(/\s+/);
            if (words.length > wordLimit) {
                element.textContent = words.slice(0, wordLimit).join(" ") + "...";
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const descriptionElement = document.querySelector('.line-clamp-3');
            if (descriptionElement) {
                limitWords(descriptionElement, 50);
            }
        });
    </script>
</body>

</html>
