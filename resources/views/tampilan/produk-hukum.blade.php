<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite("resources/css/app.css")

    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <title>Profil Desa</title>
</head>
<body class="overflow-x-hidden">
    <x-common.navbar />
    <main class="my-44 px-32 font-poppins">
        <section class="flex flex-col items-center gap-16">
            <h1 class="text-black-900 text-center text-5xl font-bold">Produk Hukum</h1>
            <div class="flex flex-col items-center w-full gap-10">
                @foreach($produkHukums as $produkHukum)
                <div class="bg-white shadow-lg rounded-lg w-3/4 mb-6">
                    <div class="bg-gray-200 p-4 rounded-t-lg text-lg font-semibold text-gray-900">
                        {{ $produkHukum->jenis_produk }}
                    </div>
                    <div class="p-6">
                        <div class="text-2xl font-bold text-gray-900 mb-2">
                            {{ $produkHukum->judul }}
                        </div>
                        <div class="text-sm text-gray-600 mb-4">
                            Dibuat tanggal {{ \Carbon\Carbon::parse($produkHukum->tanggal)->format('d M Y') }}
                        </div>
                        <div class="text-justify">
                            {!! $produkHukum->isi !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
    <x-common.footer />
</body>
</html>
