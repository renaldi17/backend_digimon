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
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <title>Profil Desa</title>
    </head>
    <body class="overflow-x-hidden">
        <x-common.navbar />
        <main
            class="my-44 flex flex-col items-center gap-36 px-32 font-poppins"
        >
            {{-- Sambutan Kepala Desa --}}
            <article class="flex flex-col items-center gap-16">
                <h1 class="text-black-900 text-center text-5xl font-bold">
                    Sambutan Kepala Desa
                </h1>
                <div class="flex flex-row flex-wrap justify-center gap-10">
                    <figure class="" id="picture">
                        <img
                            class="h-[292px] w-[222px]"
                            src="assets/kepaladesa.png"
                            alt="Kepala Desa"
                        />
                    </figure>
                    <section class="flex flex-col gap-3 md:w-[70%]" id="words">
                        <h2 class="text-black-900 text-3xl font-bold">
                            Nama Kepala Desa
                        </h2>
                        <h3 class="text-black-900 text-xl font-bold">
                            Kepala Desa
                        </h3>
                        <p class="text-justify">Assalamualaikum wr. wb.</p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Et dolorum libero est minus quam! Non
                            deserunt, culpa labore sed ex dolores nulla earum
                            iste nemo magni tenetur quam consequuntur eaque
                            minus est laboriosam quis delectus illo ad quia
                            inventore quas? Alias tenetur aspernatur odio
                            quidem, voluptate dolorem tempore excepturi quo?
                        </p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Et dolorum libero est minus quam! Non
                            deserunt, culpa labore sed ex dolores nulla earum
                            iste nemo magni tenetur quam consequuntur eaque
                            minus est laboriosam quis delectus illo ad quia
                            inventore quas? Alias tenetur aspernatur odio
                            quidem, voluptate dolorem tempore excepturi quo?
                        </p>
                        <p>Wassalamualaikum Wr. Wb.</p>
                    </section>
                </div>
            </article>

            {{-- Perangkat Desa --}}
            <article class="flex w-full flex-col items-center gap-16">
                <h1 class="text-black-900 text-center text-5xl font-bold">
                    Perangkat Desa
                </h1>
                <figure>
                    <img src="assets/perangkat-desa.png" alt="Perangkat Desa" />
                </figure>
            </article>

            {{-- Sejarah --}}
            <article class="flex w-full flex-col items-center gap-16">
                <h1
                    class="bg-squirrel-400 w-[100vw] py-4 text-center text-5xl font-bold text-white"
                >
                    Sejarah
                </h1>
                <div
                    class="flex flex-wrap-reverse justify-between gap-5 md:flex-nowrap"
                >
                    <section class="md:w-[70%]">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Enim tempora eaque illo, sapiente quidem
                            dignissimos voluptates vel quas accusamus possimus
                            mollitia magnam voluptatem cupiditate ipsam quasi at
                            veritatis eum a illum incidunt reprehenderit ullam
                            unde natus fugiat! Voluptatum cupiditate tempore
                            perspiciatis consequatur? Laboriosam libero magnam
                            in et ducimus velit maiores.
                        </p>
                    </section>
                    <figure class="md:w-[30%]">
                        <img src="assets/sejarah.png" alt="Sejarah" />
                    </figure>
                </div>
            </article>

            {{-- Visi, Misi, Tujuan --}}
            <article class="flex w-full flex-col items-center gap-16">
                <h1
                    class="bg-squirrel-400 w-[100vw] py-4 text-center text-5xl font-bold text-white"
                >
                    Visi Misi & Tujuan
                </h1>
                <div
                    class="flex flex-wrap justify-center gap-x-8 gap-y-12 md:justify-between"
                >
                    <div
                        class="flex w-[90%] flex-col gap-x-8 gap-y-12 md:w-[47%]"
                    >
                        <section class="flex flex-shrink-0 flex-col gap-2">
                            <h3 class="text-xl font-bold">
                                Visi Tegalmanggung
                            </h3>
                            <p class="text-justify">
                                Terwujudnya Desa Tegalmanggung yang Mandiri
                                Amanah Transparan Agamis dan Produktif. " MANTAP
                                " untuk menuju Desa Tegalmanggung lebih maju,
                                mandiri dan berkualitas
                            </p>
                        </section>
                        <section class="flex flex-col gap-2">
                            <h3 class="text-xl font-bold">
                                Tujuan Tegalmanggung
                            </h3>
                            <p class="text-justify">
                                Mewujudkan Desa Tegalmanggung yang lebih maju,
                                mandiri dan berkualitas
                            </p>
                        </section>
                    </div>
                    <section class="flex w-[90%] flex-col gap-2 md:w-[47%]">
                        <h3 class="text-xl font-bold">Misi Tegalmanggung</h3>
                        <ol class="list-decimal space-y-2 pl-4">
                            <li class="text-justify">
                                Meningkatkan mutu pelayanan kepada masyarakat
                                yang efisien, demokratis, adil dan merata.
                            </li>
                            <li class="text-justify">
                                Lebih terbuka dalam melayani kebutuhan
                                masyarakat, lebih mengutamakan peran serta
                                masyarakat melalui lembaga/organisasi
                                kemasyarakatan di berbagai elemen dalam rangka
                                mendorong kemandirian masyarakat.
                            </li>
                            <li class="text-justify">
                                Mengadakan pelatihan-pelatihan keterampilan bagi
                                anak remaja
                            </li>
                            <li class="text-justify">
                                Meningkatkan kualitas aparatur pemerintah desa
                                melalui pelatihan dan pembinaan
                            </li>
                            <li class="text-justify">
                                Pemberdayaan kelompok ekonomi konsumtif menjadi
                                kelompok ekonomi produktif
                            </li>
                            <li class="text-justify">
                                Mengembangkan industri kecil
                            </li>
                        </ol>
                    </section>
                </div>
            </article>
        </main>
        <x-common.footer />
    </body>
</html>
