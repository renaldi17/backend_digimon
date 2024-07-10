<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite("resources/css/app.css")

    <script src="https://cdn.tailwindcss.com"></script>
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
        defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <title>Satus Surat</title>
</head>

<body>
    <x-common.navbar />
    <main class="min-h-screen">
        <section class="mt-36">
            <h1 class="mb-4 text-center text-4xl font-bold">STATUS SURAT</h1>
            <div class="container mx-auto mt-8 grid place-items-center">
                {{-- FORM STATUS SURAT --}}
                <form
                    {{-- Action dan Method untuk Form  --}}
                    action=""
                    method=""
                    class="mb-4 w-3/5 rounded bg-white px-20 pb-8 pt-16"
                >
                @csrf

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="nik">
                            NIK
                        </label>
                        <input
                            type="text"
                            id="nik"
                            name="nik"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none""
                            placeholder="NIK"
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="nama_lengkap"
                        >
                            Nama Lengkap
                        </label>
                        <input
                            type="text"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="Nama Lengkap"
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="tanggal_lahir"
                        >
                            Tanggal Lahir <span><ion-icon name="alert-circle"></ion-icon></span>
                        </label>
                        <input
                            type="date"
                            id="tanggal_lahir"
                            name="tanggal_lahir"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="dd/mm/yyyy"
                            required
                        />
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            type="submit"
                            class="focus:shadow-outline w-full rounded border border-green-600 px-4 py-2 text-black hover:bg-green-800 hover:text-white focus:outline-none"
                        >
                            Validasi Surat
                        </button>
                    </div>
                    
                {{-- END FORM --}}
                </form>
            </div>

            <div class="container mx-auto mt-8">
                <div class="bg-white p-6 h-full">
                    <div class="flex items-center justify-between">
                        <div class="flex w-1/3 items-center">
                            <label
                                for="nik"
                                class="text-sl font my-2 mr-2 block text-gray-700"
                            >
                                NIK
                            </label>
                            <input
                                type="text"
                                id="nik"
                                name="nik"
                                class="focus:shadow-outline w-full appearance-none rounded bg-white px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                                disabled
                            />
                        </div>

                        <div class="flex w-1/4 items-center">
                            <label
                                for="status_surat"
                                class="text-sl font my-2 mr-4 block w-40 text-gray-700"
                            >
                                Status Surat
                            </label>
                            <select
                                id="status_surat"
                                class="focus:shadow-outline block w-full rounded-2xl border border-black px-3 py-1 leading-tight text-gray-700 focus:outline-none"
                            >
                                <option>Semua</option>
                                <option>Selesai</option>
                                <option>Dibatalkan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4 flex items-center">
                        <label
                            for="nama_lengkap"
                            class="text-sl font my-2 mr-2 inline-block w-32 text-gray-700"
                        >
                            Nama Lengkap
                        </label>
                        <input
                            type="text"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            class="focus:shadow-outline w-full appearance-none rounded bg-white px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            disabled
                        />
                    </div>

                    <table class="h-64 w-full table-auto overflow-hidden shadow-md">
                        <thead>
                            <tr class="bg-[#2C5D3C] text-white">
                                <th class="rounded-tl-lg font-normal">No</th>
                                <th class="px-4 py-6 font-normal">Nama Surat</th>
                                <th class="px-4 py-6 font-normal">Tanggal Pengambilan</th>
                                <th class="px-4 py-6 font-normal">Status Surat</th>
                                <th class="rounded-tr-lg font-normal">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="min-h-[12rem]">
                            {{-- @foreach ( as ) --}}
                            <tr>
                                <td class="border-b px-4 py-2 text-center">0</td>
                                <td class="border-b px-4 py-2">0</td>
                                <td class="border-b px-4 py-2 text-center">0</td>
                                <td class="border-b px-4 py-2 text-center">0</td>
                                <td class="border-b px-4 py-2 text-center">
                                    <button
                                        class="rounded border-2 border-[#FF0100] bg-white px-2 py-1 font-normal text-black hover:bg-[#FF0100] hover:text-white"
                                    >
                                        Batalkan
                                    </button>
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

                