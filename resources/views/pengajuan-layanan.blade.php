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
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <title>Pengajuan Layanan</title>
    </head>

    <body>
        <x-common.navbar />
        <main class="min-h-screen">
            <section class="mx-14 mt-36">
                <h1 class="mb-4 text-center text-4xl font-bold">
                    PENGAJUAN LAYANAN
                </h1>
                {{-- FORM PENGAJUAN --}}
                <form
                    {{-- Action dan Method untuk Form --}}
                    action=""
                    method=""
                    class="mb-4 rounded bg-white px-20 pb-8 pt-16"
                >
                    @csrf

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="jenisSurat"
                        >
                            Jenis Surat
                        </label>
                        <select
                            id="jenisSurat"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 bg-gray-200 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                        >
                            <option>Surat Keterangan</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="nik">
                            NIK
                        </label>
                        <input
                            type="text"
                            id="nik"
                            name="nik"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
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
                            Tanggal Lahir
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
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

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="rt">
                            RT
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input
                            type="text"
                            id="rt"
                            name="rt"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="001"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="rw">
                            RW
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input
                            type="text"
                            id="rw"
                            name="rw"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="004"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="catatan_tambahan"
                        >
                            Catatan Tambahan
                        </label>
                        <textarea
                            id="catatan_tambahan"
                            name="catatan_tambahan"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            rows="3"
                        ></textarea>
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="foto_ktp"
                        >
                            KTP
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input
                            type="file"
                            id="foto_ktp"
                            accept="image/jpeg, image/png"
                            {{-- perlu disesuaikan untuk tipe file nya --}}
                            class="focus:shadow-outline file:border-r-0.5 w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 file:border-b-0 file:border-l-0 file:border-t-0 file:border-gray-400 file:py-1 file:text-gray-700 focus:outline-none"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="foto_kk"
                        >
                            Kartu Keluarga
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input
                            type="file"
                            id="foto_kk"
                            accept="image/jpeg, image/png"
                            {{-- perlu disesuaikan untuk tipe file nya --}}
                            class="focus:shadow-outline file:border-r-0.5 w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 file:border-b-0 file:border-l-0 file:border-t-0 file:border-gray-400 file:py-1 file:text-gray-700 focus:outline-none"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            class="mb-2 block text-xl text-black"
                            for="surat_pengantar_rt_rw"
                        >
                            Pengantar Dari RT/RW
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input
                            type="file"
                            id="surat_pengantar_rt_rw"
                            accept="image/jpeg, image/png"
                            {{-- perlu disesuaikan untuk tipe file nya --}}
                            class="focus:shadow-outline file:border-r-0.5 w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 file:border-b-0 file:border-l-0 file:border-t-0 file:border-gray-400 file:py-1 file:text-gray-700 focus:outline-none"
                            required
                        />
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            class="focus:shadow-outline w-full rounded border border-green-800 bg-green-600 px-4 py-2 text-white hover:bg-green-800 focus:outline-none"
                            type="submit"
                        >
                            Kirim Surat
                        </button>
                    </div>
                </form>
            </section>
        </main>
        <x-common.footer />
    </body>
</html>
