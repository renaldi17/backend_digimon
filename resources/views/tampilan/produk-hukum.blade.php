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
        <style>
            .accordion-content {
                transition:
                    max-height 0.3s ease,
                    opacity 0.3s ease;
                overflow: hidden;
                max-height: 0;
                opacity: 0;
            }

            .accordion-content.expanded {
                max-height: 1000px; /* large enough value to ensure full content is shown */
                opacity: 1;
            }
        </style>
    </head>

    <body class="overflow-x-hidden">
        <x-common.navbar />
        <main class="my-44 px-32 font-poppins">
            <section class="flex flex-col items-center gap-16">
                <h1 class="text-black-900 text-center text-5xl font-bold">
                    Produk Hukum
                </h1>
                <div
                    class="mx-auto mt-10 w-full max-w-md rounded-2xl border bg-white p-2"
                >
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item border-b">
                        <div
                            class="accordion-header cursor-pointer bg-gray-100 p-4"
                            onclick="toggleAccordion(1)"
                        >
                            <h2 class="text-lg font-semibold">Tentang 1</h2>
                        </div>
                        <div
                            id="accordion-content-1"
                            class="accordion-content p-4"
                        >
                            <ol class="list-decimal px-4">
                                <li>Sub bab 1</li>
                                <li>Sub bab 2</li>
                                <li>Sub bab 3</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item border-b">
                        <div
                            class="accordion-header cursor-pointer bg-gray-100 p-4"
                            onclick="toggleAccordion(2)"
                        >
                            <h2 class="text-lg font-semibold">Tentang 2</h2>
                        </div>
                        <div
                            id="accordion-content-2"
                            class="accordion-content p-4"
                        >
                            <ol class="list-decimal px-4">
                                <li>Sub bab 1</li>
                                <li>Sub bab 2</li>
                                <li>Sub bab 3</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <div
                            class="accordion-header cursor-pointer bg-gray-100 p-4"
                            onclick="toggleAccordion(3)"
                        >
                            <h2 class="text-lg font-semibold">Tentang 3</h2>
                        </div>
                        <div
                            id="accordion-content-3"
                            class="accordion-content p-4"
                        >
                            <ol class="list-decimal px-4">
                                <li>Sub bab 1</li>
                                <li>Sub bab 2</li>
                                <li>Sub bab 3</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <script>
                    function toggleAccordion(id) {
                        const content = document.getElementById(
                            `accordion-content-${id}`,
                        );
                        content.classList.toggle('expanded');
                    }
                </script>
            </section>
        </main>
        <x-common.footer :kontak="$kontaks" />
    </body>
</html>
