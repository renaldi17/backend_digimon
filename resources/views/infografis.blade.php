{{--
    DOKUMENTASI UNTUK MEMBUAT GRAFIK:
    Membuat Grafik Dinamis:
    agar grafik dinamis, bisa digunakan {{  }} di dalam w-[] nya
    nanti grafik akan menampilkan besaran panjang yang berbeda, yaitu persentase perbandingan
    antara beberapa data
    contoh:
    ambil dari database misal laki laki 50 orang, perempuan 50 orang
    buat perbandingannya, didapat laki laki 50%, perempuan 50%
    kemudian masukkan hasil dari persentase tersebut ke dalam w-[], jadi w-[50%]
    dengan itu besaran grafik akan bertambah.
--}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
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
        <title>Infografis</title>
        @vite("resources/css/app.css")
    </head>

    <body>
        <x-common.navbar />
        <main class="my-36 flex flex-col items-center gap-48 font-poppins">
            {{-- Tulisan Judul --}}
            <div
                id="title"
                class="flex w-full flex-col items-center text-center text-4xl"
            >
                <h1 class="font-bold text-green-900">
                    Infografis
                    <b class="text-black">Tegalmanggung</b>
                    <div
                        class="ml-[35%] h-[2px] w-[10%] shrink-0 bg-green-900"
                    ></div>
                </h1>
            </div>

            {{-- Isi Dari Infografis --}}
            <article class="flex w-full flex-col items-center gap-48">
                {{-- Demografi Penduduk --}}
                <div
                    class="flex w-[70%] flex-col justify-between gap-10 md:flex-row md:gap-0"
                >
                    <div class="flex w-full flex-col items-center md:w-[50%]">
                        <div class="h-[140px] w-[140px] shrink-0">
                            <img src="assets/civilian.svg" alt="Penduduk" />
                        </div>
                        <h3 class="text-center text-2xl">
                            <strong>Demografi Penduduk</strong>
                        </h3>
                        {{-- Untuk bagian total bisa diisi dengan database secara dinamis --}}
                        <p>Total: 100</p>
                    </div>
                    <div
                        class="md:nowrap flex w-full flex-col flex-wrap items-start gap-14 md:w-[50%]"
                    >
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/man.svg" alt="Laki-laki" />
                                </div>
                                <p class="text-center">Laki-laki</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[50%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">50</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/woman.svg"
                                        alt="Perempuan"
                                    />
                                </div>
                                <p class="text-center">Perempuan</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[50%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">50</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Lulusan Pendidikan --}}
                <div
                    class="flex w-[70%] flex-col justify-between gap-10 md:flex-row md:gap-0"
                >
                    <div class="flex w-full flex-col items-center md:w-[50%]">
                        <div class="h-[140px] w-[140px] shrink-0">
                            <img src="assets/education.svg" alt="Penduduk" />
                        </div>
                        <h3 class="text-center text-2xl">
                            <strong>Lulusan Pendidikan</strong>
                        </h3>
                        {{-- Untuk bagian total bisa diisi dengan database secara dinamis --}}
                        <p>Total: 100</p>
                    </div>
                    <div
                        class="md:nowrap flex w-full flex-col flex-wrap items-start gap-14 md:w-[50%]"
                    >
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/sd.svg" alt="SD" />
                                </div>
                                <p class="text-center">SD</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[12%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">12</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/osis.svg" alt="SMP" />
                                </div>
                                <p class="text-center">SMP</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/osis.svg" alt="SMA" />
                                </div>
                                <p class="text-center">SMA</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[13%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">13</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/education.svg"
                                        alt="Diploma"
                                    />
                                </div>
                                <p class="text-center">Diploma</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[5%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">5</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/s1.svg" alt="S1" />
                                </div>
                                <p class="text-center">S1</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[25%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">25</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/s2.svg" alt="S2" />
                                </div>
                                <p class="text-center">S2</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[10%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">10</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/s3.svg" alt="S3" />
                                </div>
                                <p class="text-center">S3</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[5%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">5</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/tidaksekolah.svg"
                                        alt="Tidak Sekolah"
                                    />
                                </div>
                                <p class="text-center">Belum/Tidak Sekolah</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pekerjaan --}}
                <div
                    class="mt-8 flex w-[70%] flex-col justify-between gap-10 md:flex-row md:gap-0"
                >
                    <div class="flex w-full flex-col items-center md:w-[50%]">
                        <div class="h-[140px] w-[140px] shrink-0">
                            <img src="assets/work.svg" alt="Pekerjaan" />
                        </div>
                        <h3 class="text-center text-2xl">
                            <strong>Pekerjaan</strong>
                        </h3>
                        {{-- Untuk bagian total bisa diisi dengan database secara dinamis --}}
                        <p>Total: 100</p>
                    </div>
                    <div
                        class="md:nowrap flex w-full flex-col flex-wrap items-start gap-14 md:w-[50%]"
                    >
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/pns.svg" alt="PNS" />
                                </div>
                                <p class="text-center">PNS</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[10%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">10</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/pelajar.svg"
                                        alt="Pelajar"
                                    />
                                </div>
                                <p class="text-center">Pelajar</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/wiraswasta.svg"
                                        alt="Wiraswasta"
                                    />
                                </div>
                                <p class="text-center">Wiraswasta</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[20%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">20</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/tidakkerja.svg"
                                        alt="Belum/Tidak Bekerja"
                                    />
                                </div>
                                <p class="text-center">Belum/Tidak Bekerja</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img
                                        src="assets/pengurusrumahtangga.svg"
                                        alt="Pengurus Rumah Tangga"
                                    />
                                </div>
                                <p class="text-center">Pengurus Rumah Tangga</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                        <div class="flex h-24 w-full flex-row gap-10">
                            <div
                                class="flex w-[20%] flex-col items-center gap-0"
                            >
                                <div class="h-[79.91px] w-[79.91px] shrink-0">
                                    <img src="assets/guru.svg" alt="Guru" />
                                </div>
                                <p class="text-center">Guru</p>
                            </div>
                            <div class="flex w-[80%] flex-row">
                                <div
                                    class="h-[100%] w-[15%] shrink-0 bg-green-900"
                                ></div>
                                <p class="ml-[5%] self-center">15</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        <x-common.footer />
    </body>
</html>
