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
            max-width: 1000px; /* Set a maximum width for the image container */
            margin: 0 auto; /* Center the image container */
        }

        .struktur-gambar img {
            width: 100%;
            height: 650px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the container */
            border-radius: 8px; /* Optional: add rounded corners */
        }

        .struktur-gambar h2 {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
            padding: 10px;
            text-align: center;
            width: 100%;
            font-size: 1.25rem;
            font-weight: 700;
            color: #051922;
            border-top: 1px solid #313131; /* Optional: add a border at the top */
        }

        .staf-item img {
            width: 100%;
            height: 320px; /* Set a fixed height */
            object-fit: cover; /* Ensure images cover the container */
        }

        .staf-item p {
            text-align: center;
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
            <div class="struktur-gambar relative min-h-96">
                <img src="{{ Storage::url($strukturs->gambar) }}" alt="Desa">
                <h2 id="nama_struktur">{{ $strukturs->nama }}</h2>
            </div>
            @endif

            <div class="relative my-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>
                <input type="text" name="search" id="staf-search"
                    class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                    placeholder="Cari Staf Desa..." value="{{ $search }}">
            </div>

            <div id="staf-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($perangkatDesas as $perangkatDesa)
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
                @endforeach
            </div>

            <div id="pagination" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
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

    <x-common.footer />

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
    </script>
</body>
</html>
