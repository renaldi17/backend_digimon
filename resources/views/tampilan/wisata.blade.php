<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Wisata</title>
</head>

<body>
    <x-common.navbar />

    <main class="min-h-screen my-24">
        <section class="container mt-6 py-6 flex flex-col gap-4">
            <h1 class="font-poppins text-4xl font-bold">
                Nama Tempat
            </h1>

            <div class="text-sm text-gray-400 flex items-center gap-2">
                <i class="fa-regular fa-calendar ml-1"></i>
                Alamat Desa
            </div>

            <div class="relative min-h-96">
                <img class="absolute inset-0 w-full h-full object-cover" src="https://picsum.photos/1920/1080"
                    alt="Desa Tegal Manggung">
            </div>
        </section>

        <section class="container mt-6 py-6 flex flex-col md:flex-row gap-10">
            <div class="md:flex-1 md:w-2/3">
                <h2 class="font-poppins text-3xl font-semibold mb-4">
                    Deskripsi
                </h2>
                <p class="text-base text-justify mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia maiores minima, velit
                    amet, veniam aliquam sapiente odit sequi deleniti vero? Ipsa nesciunt maxime, repellendus fugit
                    nulla accusamus ex sint doloribus libero unde voluptatum sit est quibusdam. Corrupti quibusdam
                    accusantium eos repudiandae, ratione expedita? Quasi ab porro molestiae doloremque similique nam
                    sequi unde eaque dignissimos? Voluptatum sequi corporis praesentium corrupti sunt neque nam
                    consectetur, quidem cumque, reprehenderit atque ullam fuga porro incidunt cum ad, vel veritatis
                    pariatur facere officia accusamus ut delectus repudiandae! Illum tempore id error itaque natus
                    dolor, magnam tenetur distinctio amet doloribus iusto omnis quae, ipsa quod!
                </p>
                <p class="text-base text-justify mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia maiores minima, velit
                    amet, veniam aliquam sapiente odit sequi deleniti vero? Ipsa nesciunt maxime, repellendus fugit
                    nulla accusamus ex sint doloribus libero unde voluptatum sit est quibusdam. Corrupti quibusdam
                    accusantium eos repudiandae, ratione expedita? Quasi ab porro molestiae doloremque similique nam
                    sequi unde eaque dignissimos? Voluptatum sequi corporis praesentium corrupti sunt neque nam
                    consectetur, quidem cumque, reprehenderit atque ullam fuga porro incidunt cum ad, vel veritatis
                    pariatur facere officia accusamus ut delectus repudiandae! Illum tempore id error itaque natus
                    dolor, magnam tenetur distinctio amet doloribus iusto omnis quae, ipsa quod!
                </p>
            </div>

            <aside class="md:flex-none md:w-1/3">
                <div class="relative min-h-64">
                    <iframe class="absolute inset-0 w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.393893894764!2d107.86788707414206!3d-6.962774668170852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68cf4a948dcf3d%3A0x79229b1be3f24e9d!2sPerkebunan%20Kopi%20Wetan!5e0!3m2!1sen!2sid!4v1720777236856!5m2!1sen!2sid"
                        style="border:0;" width="" height="" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </aside>
        </section>

        <section class="container mt-6 py-6 flex flex-col">
            <h2 class="font-poppins text-3xl font-semibold mb-4">
                Fasilitas
            </h2>

            <ol class="text-base list-decimal pl-5">
                <li>Taman Nasional</li>
                <li>Pantai</li>
                <li>Museum</li>
                <li>Kolam Renang</li>
                <li>Taman Tematik</li>
            </ol>
        </section>
    </main>

    <x-common.footer :kontak="$kontaks" />
</body>

</html>
