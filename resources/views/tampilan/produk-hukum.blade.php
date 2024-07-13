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
            class="my-44 flex flex-col items-center gap-16 px-32 font-poppins"
        >
            <section class="flex flex-col items-center gap-2">
                <h1 class="text-black-900 text-center text-5xl font-bold">
                    Produk Hukum
                </h1>
            </section>
            <section class="flex gap-10 w-[100%] flex-col">
                <div class="flex w-[90%] flex-col gap-2 ">
                    <h3 class="text-xl font-bold">Tentang...</h3>
                <ol class="list-decimal space-y-2 pl-4">
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                </ol>
                </div>
                <div class="flex w-[90%] flex-col gap-2">
                    <h3 class="text-xl font-bold">Tentang...</h3>
                <ol class="list-decimal space-y-2 pl-4">
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                    <li class="text-justify">
                        <a href="">Pengajuan perubaha data kependudukan dari luar negeri</a>
                    </li>
                </ol>
                </div>
            </section>
        </main>
        <x-common.footer />
    </body>
</html>
