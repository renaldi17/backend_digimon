<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Desa</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom styles */
        .struktur-gambar {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .struktur-gambar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .struktur-gambar h2 {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.7);
            padding: 10px;
            text-align: center;
            width: 100%;
            font-size: 1.25rem;
            font-weight: 700;
            color: #051922;
            border-top: 1px solid #313131;
        }

        .staf-item img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .triangle {
            /* width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-right: 50px solid #2C5D3C;
                border-bottom: 50px solid transparent; */
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .triangle-behind {
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-right: 50px solid #C5C5C5;
            /* Darker color for the behind triangle */
            border-bottom: 50px solid transparent;
            position: absolute;
            bottom: 30px;
            /* Adjust the position to create the illusion */
            right: 0;
            /* Adjust the position to create the illusion */
            z-index: 0;
            /* Behind the main triangle */
        }

        .triangle-behind:before {
            content: "";
            widows: 0;
            height: 0;
            border-top: 45px solid transparent;
            border-right: 45px solid #fff;
            border-bottom: 45px solid transparent;
            position: absolute;
            bottom: -45px;
            right: -48px;
            /* z-index: 0; */
        }

        .triangle-front {
            width: 0;
            height: 0;
            border-top: 45px solid transparent;
            border-right: 45px solid #2C5D3C;
            /* Color for the front triangle */
            border-bottom: 45px solid transparent;
            position: absolute;
            bottom: 0;
            right: 0;
            /* z-index: 1; */
        }

        .staf-item p {
            text-align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
        }

        /* Animation */
        @keyframes zoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <x-common.navbar />

    <main class="min-h-screen my-24">
        <section class="container mt-6 py-6 flex flex-col gap-10">
            <h1 class="text-center font-poppins text-4xl font-black text-[#051922]">
                Perangkat Desa
            </h1>

            @if ($strukturs)
                <div class="struktur-gambar relative min-h-96" id="strukturGambar">
                    <img src="{{ Storage::url($strukturs->gambar) }}" alt="Desa">
                </div>
            @endif

            <!-- Modal Structure -->
            <div id="imageModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImage">
                <div id="caption"></div>
            </div>

            <div class="relative my-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>
                <input type="text" name="search" id="staf-search"
                    class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                    placeholder="Cari Staf Desa..." value="{{ $search }}">
            </div>

            <div id="staf-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- @foreach ($perangkatDesas as $perangkatDesa)
                    <article class="bg-white rounded-lg shadow-xl relative staf-item">
                        <div class="group relative overflow-hidden rounded-t-lg">
                            <img class="w-full rounded-t-lg group-hover:blur-sm group-hover:scale-105 group-hover:rotate-1 transition-all duration-500"
                                src="{{ Storage::url($perangkatDesa->gambar) }}" alt="Staf Desa">
                        </div>
                        <div class="p-4 min-h-48 flex flex-col gap-4">
                            <p class="text-gray-900 font-bold text-lg">{{ $perangkatDesa->nama }}</p>
                            <p class="text-gray-600 text-base">{{ $perangkatDesa->jabatan }}</p>
                            <p class="text-gray-600 text-base">{{ $perangkatDesa->kontak }}</p>
                        </div>
                        <div class="triangle triangle-behind"></div>
                        <div class="triangle triangle-front"></div>
                    </article>
                @endforeach --}}
                @foreach ($perangkatDesas as $perangkatItem)
                    <article class="bg-white rounded-xl shadow-xl relative staf-item"
                        data-title="{{ $perangkatItem->nama }}">
                        <div class="group relative overflow-hidden">
                            <img class="w-full rounded-t-lg group-hover:scale-105 group-hover:rotate-1 transition-all duration-500"
                                src="{{ Storage::url($perangkatItem->gambar) }}" alt="Staf Desa">

                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-slate-900 group-hover:from-black/40 group-hover:via-black/60 group-hover:to-black/70">
                            </div>
                            <div class="absolute inset-0 p-5 opacity-0 group-hover:opacity-100 flex flex-col">
                                {{-- @foreach ($perangkatItem['kontak'] as $platform => $handle)
                                    @if ($platform == 'instagram')
                                        <a class="text-lg text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 gap-1"
                                            href="https://www.instagram.com/{{ $handle }}">
                                            <i class="fa-brands fa-instagram"></i>
                                            {{ $handle }}
                                        </a>
                                    @elseif ($platform == 'facebook')
                                        <a class="text-lg text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 gap-1"
                                            href="https://www.facebook.com/{{ $handle }}">
                                            <i class="fa-brands fa-facebook"></i>
                                            {{ $perangkatItem['nama'] }}
                                        </a>
                                    @endif
                                @endforeach --}}
                            </div>

                        </div>

                        <div class="p-4 min-h-48 flex flex-col gap-4">
                            <p class="text-gray-900 font-bold text-lg">{{ $perangkatItem->nama }}</p>
                            <p class="text-gray-600 text-base">{{ $perangkatItem->jabatan }}</p>
                            <p class="text-gray-600 text-base">{{ $perangkatItem->kontak }}</p>
                        </div>

                        <div class="triangle triangle-behind"></div>
                        <div class="triangle triangle-front"></div>
                    </article>
                @endforeach
            </div>

            <div id="pagination"
                class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    {{ $perangkatDesas->links() }}
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Menampilkan
                            <span class="font-medium">{{ $perangkatDesas->firstItem() }}</span>
                            hingga
                            <span class="font-medium">{{ $perangkatDesas->lastItem() }}</span>
                            dari
                            <span class="font-medium">{{ $perangkatDesas->total() }}</span>
                            hasil
                        </p>
                    </div>
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            {{ $perangkatDesas->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-common.footer :kontak="$kontaks" />

    <script>
        document.getElementById('staf-search').addEventListener('input', function() {
            const query = this.value;
            const container = document.getElementById('staf-container');
            const pagination = document.getElementById('pagination');

            fetch(`{{ route('perangkat') }}?search=${query}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.text())
                .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newContainer = doc.getElementById('staf-container');
                    const newPagination = doc.getElementById('pagination');

                    container.innerHTML = newContainer.innerHTML;
                    pagination.innerHTML = newPagination.innerHTML;
                })
                .catch(error => console.error('Error:', error));
        });

        document.addEventListener('DOMContentLoaded', () => {
            // Get the modal
            var modal = document.getElementById("imageModal");

            // Get the image and insert it inside the modal
            var modalImg = document.getElementById("modalImage");
            var captionText = document.getElementById("caption");

            // Add click event to the image in the struktur-gambar class
            var img = document.querySelector('.struktur-gambar img');
            if (img) {
                img.onclick = function() {
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Close the modal when clicking outside of the image
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
</body>

</html>
