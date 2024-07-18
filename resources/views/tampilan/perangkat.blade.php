<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

        <title>Perangkat Desa</title>

        <style>
            .triangle {
                /* width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-right: 50px solid #2C5D3C;
                border-bottom: 50px solid transparent; */
                position: absolute;
                bottom: 0;
                right: 0;
            }

            .triangle-behind {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-right: 50px solid #C5C5C5; /* Darker color for the behind triangle */
                border-bottom: 50px solid transparent;
                position: absolute;
                bottom: 30px; /* Adjust the position to create the illusion */
                right: 0; /* Adjust the position to create the illusion */
                z-index: 0; /* Behind the main triangle */
            }

            .triangle-behind:before {
                content: "";
                widows: 0;
                height: 0;
                border-top: 45px solid transparent;
                border-right: 45px solid #fff;
                border-bottom: 45px solid transparent;
                position: absolute;
                bottom: -45px;
                right: -48px;
                /* z-index: 0; */
            }

            .triangle-front {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-right: 50px solid #2C5D3C; /* Color for the front triangle */
                border-bottom: 50px solid transparent;
                position: absolute;
                bottom: 0;
                right: 0;
                /* z-index: 1; */
            }
        </style>
    </head>

    <body>
        <x-common.navbar />

        <main class="min-h-screen my-24">
            <section class="container mt-6 py-6 flex flex-col gap-10">
                <h1 class="text-center font-poppins text-4xl font-black text-[#051922]">
                    Perangkat Desa
                </h1>

                <div class="relative min-h-96">
                    <img
                        class="absolute inset-0 w-full h-full object-contain"
                        src="https://marketplace.canva.com/EAFh42U4x94/1/0/1600w/canva-pink-colorful-modern-organizational-chart-graph-vU6MzfxNL8s.jpg"
                        alt="Desa Tegal Manggung"
                    >
                </div>

                <div class="relative my-2 rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                    </div>
                    <input type="text" name="staf-search" id="staf-search"
                        class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                        placeholder="Cari Staf Desa...">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($perangkat as $perangkatItem)
                        <article
                            class="bg-white rounded-lg shadow-xl relative staf-item"
                            data-title="{{ $perangkatItem["nama"] }}"
                        >
                            <div class="group relative overflow-hidden">
                                <img
                                    class="w-full rounded-t-lg group-hover:blur-sm group-hover:scale-105 group-hover:rotate-1 transition-all duration-500"
                                    src="{{ $perangkatItem["gambar"] }}"
                                    alt="Staf Desa"
                                >

                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-slate-900 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                                <div class="absolute inset-0 p-5 opacity-0 group-hover:opacity-100 flex flex-col">
                                    @foreach ($perangkatItem["kontak"] as $platform => $handle)
                                        @if ($platform == 'instagram')
                                            <a
                                                class="text-lg text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 gap-1"
                                                href="https://www.instagram.com/{{ $handle }}"
                                            >
                                                <i class="fa-brands fa-instagram"></i>
                                                {{ $handle }}
                                            </a>
                                        @elseif ($platform == 'facebook')
                                            <a
                                                class="text-lg text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 gap-1"
                                                href="https://www.facebook.com/{{ $handle }}"
                                            >
                                                <i class="fa-brands fa-facebook"></i>
                                                {{ $perangkatItem["nama"] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>

                            </div>

                            <div class="p-4 min-h-48 flex flex-col gap-4">
                                <p class="text-gray-900 font-bold text-lg">{{ $perangkatItem["nama"] }}</p>
                                <p class="text-gray-600 text-base">{{ $perangkatItem["jabatan"] }}</p>
                                <p class="text-gray-600 text-base">{{ $perangkatItem["nik"] }}</p>
                            </div>

                            <div class="triangle triangle-behind"></div>
                            <div class="triangle triangle-front"></div>
                        </article>
                    @endforeach
                </div>

                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                    <div class="flex flex-1 justify-between sm:hidden">
                        <a href="#" class="staf-prev-btn relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Sebelumnya</a>
                        <a href="#" class="staf-next-btn relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Selanjutnya</a>
                    </div>

                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Menampilkan
                                <span id="staf-showing-min" class="font-medium">1</span>
                                hingga
                                <span id="staf-showing-max" class="font-medium">10</span>
                                dari
                                <span id="staf-showing-total" class="font-medium">97</span>
                                hasil
                            </p>
                        </div>

                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                <a href="#" class="staf-prev-btn relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Sebelumnya</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                <div id="staf-pagination-numbers" class="pagination-numbers inline-flex">
                                    {{-- <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                    <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                    <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a> --}}
                                </div>
                                <a href="#" class="staf-next-btn relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <x-common.footer />
    </body>
</html>
