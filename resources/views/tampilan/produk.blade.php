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

        @vite('resources/css/app.css')
        <script
            src="https://kit.fontawesome.com/89851fc4a2.js"
            crossorigin="anonymous"
        ></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>

        <title>Produk</title>
    </head>

    <body>
        <x-common.navbar />

        <main class="min-h-screen my-24">
            <section class="container mt-6 py-6 flex flex-col gap-4">
                <h1 class="font-poppins text-4xl font-bold">
                    Alpukat Mentega
                </h1>

                <div class="text-sm text-gray-400 flex items-center gap-2">
                    <i class="fa-solid fa-location-dot"></i>
                    Alamat Penghasil Alpukat
                </div>

                <div class="flex flex-col md:flex-row gap-10">
                    <aside class="md:flex-none md:w-1/3">
                        <div class="relative min-h-96">
                            <img
                                class="absolute inset-0 w-full h-full object-cover"
                                src="https://picsum.photos/1920/1080"
                                alt="Desa Tegal Manggung"
                            >
                        </div>
                    </aside>

                    <div class="md:flex-1 md:w-2/3">
                        <h2 class="font-poppins text-3xl font-semibold mb-4">
                            Deskripsi
                        </h2>
                        <p class="text-base text-justify mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia maiores minima, velit amet, veniam aliquam sapiente odit sequi deleniti vero? Ipsa nesciunt maxime, repellendus fugit nulla accusamus ex sint doloribus libero unde voluptatum sit est quibusdam. Corrupti quibusdam accusantium eos repudiandae, ratione expedita? Quasi ab porro molestiae doloremque similique nam sequi unde eaque dignissimos? Voluptatum sequi corporis praesentium corrupti sunt neque nam consectetur, quidem cumque, reprehenderit atque ullam fuga porro incidunt cum ad, vel veritatis pariatur facere officia accusamus ut delectus repudiandae! Illum tempore id error itaque natus dolor, magnam tenetur distinctio amet doloribus iusto omnis quae, ipsa quod!
                        </p>
                        <p class="text-base text-justify mb-4 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia maiores minima, velit amet, veniam aliquam sapiente odit sequi deleniti vero? Ipsa nesciunt maxime, repellendus fugit nulla accusamus ex sint doloribus libero unde voluptatum sit est quibusdam. Corrupti quibusdam accusantium eos repudiandae, ratione expedita? Quasi ab porro molestiae doloremque similique nam sequi unde eaque dignissimos? Voluptatum sequi corporis praesentium corrupti sunt neque nam consectetur, quidem cumque, reprehenderit atque ullam fuga porro incidunt cum ad, vel veritatis pariatur facere officia accusamus ut delectus repudiandae! Illum tempore id error itaque natus dolor, magnam tenetur distinctio amet doloribus iusto omnis quae, ipsa quod!
                        </p>
                    </div>
                </div>
            </section>

            <div class="flex flex-col md:flex-row-reverse">
                <section class="container mt-6 py-6 flex flex-col gap-4">
                    <h2 class="font-poppins text-3xl font-semibold mb-4">
                        Perkenalan Produk
                    </h2>

                    <div
                        class="mx-auto mt-6 aspect-video w-full max-w-screen-lg md:px-8"
                    >
                        <iframe
                            class="h-full w-full"
                            src="https://www.youtube.com/embed/LXb3EKWsInQ?si=fsZZbZr7t-vuSXzR"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </section>

                <section class="container mt-6 py-6 flex flex-col gap-4">
                    <h2 class="font-poppins text-3xl font-semibold mb-4">
                        Kontak
                    </h2>

                    <ol class="text-gray-700 flex flex-col gap-10">
                        <li class="flex items-center gap-4">
                            <i class="fa-brands fa-whatsapp text-4xl"></i>
                            <span class="text-2xl">+62 835-2213-0922</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-brands fa-instagram text-4xl"></i>
                            <span class="text-2xl">tegalmanggung</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-brands fa-facebook text-4xl"></i>
                            <span class="text-2xl">Tegal Manggung</span>
                        </li>
                    </ol>
                </section>
            </div>
        </main>

        <x-common.footer />
    </body>
</html>
