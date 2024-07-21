{{--
    CATATAN: Untuk bagian seperti artikel-artikel bisa diisi dengan database secara
    dinamis. Namun data yang disimpan jangan berupa teks mentah, tapi teks yang
    disimpan dibuat menggunakan html, sehingga rapih.
    Saran, bisa ditambahkan di menu admin untuk mengedit data yang bersifat artikel menggunakan plugin
    seperti SCK Web Editor atau semacamnya agar nanti data yang disimpan merupakan sebuah HTML, sehingga
    rapih saat dibaca.
--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')

    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <title>Profil Desa</title>
</head>

<body class="overflow-x-hidden">
    <x-common.navbar />
    <main class="my-44 flex flex-col items-center gap-36 px-32 font-poppins">
        {{-- Sambutan Kepala Desa --}}
        <article class="flex flex-col items-center gap-16">
            <h1 class="text-black-900 text-center text-5xl font-bold">
                Sambutan Kepala Desa
            </h1>
            <div class="flex flex-row flex-wrap justify-center gap-10">
                <figure class="" id="picture">
                    <img class="h-[292px] w-[222px]" src="{{ Storage::url($profil->gambar_kepala_desa) }}"
                        alt="Kepala Desa" />
                </figure>
                <section class="flex flex-col gap-3 md:w-[70%]" id="words">
                    <h2 class="text-black-900 text-3xl font-bold">
                        {{ $profil->nama_kepala_desa }}
                    </h2>
                    <h3 class="text-black-900 text-xl font-bold">
                        Kepala Desa
                    </h3>
                    <p class="text-justify">{!! $profil->deskripsi_kepala_desa !!}</p>
                </section>
            </div>
        </article>


        {{-- Sejarah --}}
        <article class="flex w-full flex-col items-center gap-16">
            {{-- bg-squirrel-400 --}}
            <h1 class=" bg-[#3B432C] w-[100vw] py-4 text-center text-5xl font-bold text-white">
                Sejarah
            </h1>
            {{-- <div id="video">video</div> --}}
            <div class="flex flex-wrap-reverse justify-between gap-5 md:flex-nowrap">
                <section class="flex flex-col gap-3 md:w-[100%]" id="words">
                    <p class="text-justify">{!! $profil->sejarah_desa !!}</p>
                </section>
                {{-- <figure class="md:w-[30%]">
                    <img src="{{ Storage::url($profil->gambar_sejarah_desa) }}" alt="Sejarah" />
                </figure> --}}
            </div>
        </article>

        {{-- Visi, Misi, Tujuan --}}
        <article class="flex w-full flex-col items-center gap-16">
            <h1 class="bg-[#3B432C] w-[100vw] py-4 text-center text-5xl font-bold text-white">
                Visi Misi & Tujuan
            </h1>
            {{-- <div class="flex flex-wrap justify-center gap-x-8 gap-y-12 md:justify-between">
                <div class="flex w-[90%] flex-col gap-x-8 gap-y-12 md:w-[47%]">
                    <section class="flex flex-shrink-0 flex-col gap-2">
                        <h3 class="text-xl font-bold">
                            Visi Tegalmanggung
                        </h3>
                        <p class="text-justify">{!! $profil->visi_desa !!}</p>
                    </section>
                    <section class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold">
                            Tujuan Tegalmanggung
                        </h3>
                        <p class="text-justify">{!! $profil->tujuan_desa !!}</p>
                    </section>
                    <section class="flex w-[90%] flex-col gap-2 md:w-[47%]">
                        <h3 class="text-xl font-bold">Misi Tegalmanggung</h3>
                        {!! $profil->misi_desa !!}
                    </section>
                </div>
            </div> --}}

            <div class="flex w-full flex-wrap justify-center gap-x-8 gap-y-12 md:justify-between">
                <div class="flex w-[90%] flex-col gap-y-12 md:w-[47%]">
                    <section class="flex flex-col gap-2 order-1 md:order-none">
                        <h3 class="text-xl font-bold">Visi Tegalmanggung</h3>
                        <p class="text-justify">{!! $profil->visi_desa !!}</p>
                    </section>
                    <section class="flex flex-col gap-2 order-3 md:order-none">
                        <h3 class="text-xl font-bold">Tujuan Tegalmanggung</h3>
                        <p class="text-justify">{!! $profil->tujuan_desa !!}</p>
                    </section>
                </div>
                <div class="flex w-[90%] flex-col gap-y-12 md:w-[47%]">
                    <section class="flex flex-col gap-2 order-2 md:order-none">
                        <h3 class="text-xl font-bold">Misi Tegalmanggung</h3>
                        <p class="text-justify">{!! $profil->misi_desa !!}</p>
                    </section>
                </div>
            </div>
        </article>
    </main>
    <x-common.footer />
</body>

</html>
