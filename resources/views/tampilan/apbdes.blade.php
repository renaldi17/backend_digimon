<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        @vite("resources/css/app.css")

        <script
            type="module"
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
        ></script>
        <script
            src="https://kit.fontawesome.com/89851fc4a2.js"
            crossorigin="anonymous"
        ></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <title>Satus Surat</title>
    </head>

    <body>
        <x-common.navbar />
        <main class="min-h-screen">
            <section class="mt-36">
                <h1 class="mb-4 text-center text-4xl font-bold">APBDES</h1>
                <h1 class="mb-4 text-center text-4xl font-bold">
                    ANGGARAN PEMASUKKAN DAN BELANJA DESA
                </h1>
                {{-- TABEL --}}
                <div class="mt-24 px-10 sm:px-20 md:px-32 lg:px-40">
                    <div class="h-96 overflow-x-auto overflow-y-auto">
                        <table
                            class="mt-5 h-80 w-full overflow-hidden shadow-md"
                        >
                            <thead>
                                <tr class="bg-[#2C5D3C] text-white">
                                    <th
                                        colspan="5"
                                        class="rounded-tl-lg rounded-tr-lg px-4 py-6 text-left font-normal"
                                    >
                                        Rancangan Kegiatan
                                    </th>
                                </tr>
                                <tr>
                                    <th
                                        class="rounded-tl-lg border-b py-4 font-normal"
                                    >
                                        Bidang
                                    </th>
                                    <th class="border-b px-4 font-normal">
                                        Sub Bidang
                                    </th>
                                    <th class="border-b px-4 font-normal">
                                        Total Kegiatan
                                    </th>
                                    <th class="border-b px-4 font-normal">
                                        Total Anggaran
                                    </th>
                                    <th
                                        class="rounded-tr-lg border-b font-normal"
                                    >
                                        Tahun
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="min-h-[12rem]">
                                {{-- @foreach ( as ) --}}
                                <tr>
                                    <td class="border-b px-4 py-4 text-center">
                                        0
                                    </td>
                                    <td class="border-b px-4 text-center">0</td>
                                    <td class="border-b px-4 text-center">0</td>
                                    <td class="border-b px-4 text-center">0</td>
                                    <td class="border-b px-4 text-center">
                                        2024
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                                <tr class="h-full"></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
        <x-common.footer />
    </body>
</html>
