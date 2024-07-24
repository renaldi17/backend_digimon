<div class="bg-[#3B432C] ">
    <footer class="container min-h-48 py-6 text-zinc-50">
        <div class="flex w-full flex-col gap-x-12 gap-y-8 lg:flex-row">
            <div class="lg:basis-1/3">
                <h4 class="scroll-m-20 text-xl font-semibold tracking-tight text-[#FCE5AD]">
                    TEGAL MANGGUNG
                </h4>
                <p class="leading-7 text-muted [&:not(:first-child)]:mt-2">
                    Kelurahan Tegal Manggung merupakan desa yang kaya dengan
                    alam memiliki beberapa produk alam yang melimpah seperti
                    alpukat dan gula aren. Saat ini Desa Tegal Manggung sedang
                    Membangun Desa Digital dibutikan dengan pembutan website
                    desa.
                </p>
            </div>


            {{-- Section Kontak --}}
            <div class="lg:basis-1/3">
                <h4 class="scroll-m-20 text-xl font-semibold tracking-tight text-[#FCE5AD]">
                    Kontak
                </h4>
                <ul class="list-none space-y-2 leading-7 text-muted [&:not(:first-child)]:mt-2">
                    @props(['kontak'])
                    @foreach ($kontak as $kon)
                        <li>
                            <h5 id="nama_kontak">{{ $kon->nama }}:</h5>
                            <p>
                                <i class="fa-solid fa-phone mr-2" id="nomor_telepon"></i>
                                <a href="wa.me {{ $kon->nomor_telepon }}">+{{ $kon->nomor_telepon }}</a>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div class="lg:basis-1/3">
                <h4 class="scroll-m-20 text-xl font-semibold tracking-tight text-[#FCE5AD]">
                    Alamat Kelurahan
                </h4>

                <a href="https://maps.app.goo.gl/hw5Y8RykFhLfbcFn7"
                    class="leading-7 text-muted [&:not(:first-child)]:mt-2">
                    <i class="fa-solid fa-location-dot mr-2"></i>
                    Jl. Parakanmuncang - Sindulang KM 09, Kec. Cimanggung, Kab. Sumedang.
                </a>

                <div class="mt-4 flex items-center justify-between gap-x-2 sm:max-w-64">
                    <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        href="https://www.tiktok.com/@tegalmanggung">
                        <i class="fa-brands fa-tiktok h-6 w-6"></i>
                    </a>
                    <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        href="https://www.instagram.com/tegalmanggung.official/">
                        <i class="fa-brands fa-instagram h-6 w-6"></i>
                    </a>
                    <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        href="https://www.youtube.com/@desategalmanggung">
                        <i class="fa-brands fa-youtube h-6 w-6"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="leading-7 text-muted">Dibuat oleh UPI Kampus Cibiru</p>
            <p class="leading-7 text-muted [&:not(:first-child)]:mt-1">
                &copy; 2024 Desa Tegal Manggung. All rights reserved.
            </p>
        </div>
    </footer>
</div>
