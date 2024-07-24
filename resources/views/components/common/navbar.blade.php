<nav x-data="{ isOpen: false }" class="fixed top-0 z-50 flex min-h-12 w-full flex-col">
    {{-- Sosial Media --}}
    <section class="hidden bg-[#2C5D3C] md:block">
        <div class="container items-center justify-between py-2 text-zinc-50 md:flex">
            <div class="flex gap-x-4">
                <div>
                    <a class="inline-flex w-full items-center justify-start whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors hover:text-accent/75 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        href="mailto:emailTegalmanggungDesa@gmail.com">
                        <i class="fa-solid fa-envelope mr-2"></i>
                        emailTegalmanggung@gmail.com
                    </a>
                </div>
                <div>
                    <a class="inline-flex w-full items-center justify-start whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors hover:text-accent/75 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        href="https://api.whatsapp.com/send/?phone=6283822886761&text&type=phone_number&app_absent=0">
                        <i class="fa-solid fa-phone mr-2"></i>
                        (+62) 8382-2886-761
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-between gap-x-2">
                <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    href="https://www.tiktok.com/@tegalmanggung">
                    <i class="fa-brands fa-tiktok h-4 w-4"></i>
                </a>
                <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    href="https://www.youtube.com/@desategalmanggung">
                    <i class="fa-brands fa-youtube h-4 w-4"></i>
                </a>
                <a class="inline-flex h-5 w-5 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    href="https://www.instagram.com/tegalmanggung.official/">
                    <i class="fa-brands fa-instagram h-4 w-4"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Navigation Links --}}
    <section class="bg-background shadow">
        <div class="container flex items-center justify-between py-2">
            <div class="flex items-center gap-x-2">
                <a href="/#section-main">
                    <img class="h-8 w-8" src="{{ asset('assets/img/desaTegalManggung.png') }}"
                        alt="Logo TegalManggung" />
                </a>
                <h1 class="text-lg font-semibold tracking-wide">
                    Desa Tegalmanggung
                </h1>
            </div>

            <ul class="hidden gap-x-2 md:flex lg:gap-x-4">
                <li>
                    <x-ui.button variant="ghost" href="/#section-main">Beranda</x-ui.button>
                </li>

                <li>
                    <x-ui.dropdown.root>
                        <x-ui.dropdown.button variant="ghost">
                            Informasi Desa
                        </x-ui.dropdown.button>
                        <x-ui.dropdown.content>
                            <x-ui.dropdown.item>
                                <a href="/perangkat" class="w-full text-left">
                                    Perangkat Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/berita" class="w-full text-left">
                                    Berita Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/penghargaan" class="w-full text-left">
                                    Penghargaan Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/wisata" class="w-full text-left">
                                    Wisata Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/produk" class="w-full text-left">
                                    Produk UMKM
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/#section-layanan" class="w-full text-left">
                                    Layanan
                                </a>
                            </x-ui.dropdown.item>
                        </x-ui.dropdown.content>
                    </x-ui.dropdown.root>
                </li>

                <li>
                    <x-ui.button variant="ghost" href="/profil">
                        Profil
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button variant="ghost" href="/infografis">
                        Infografis
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button variant="ghost" href="/#section-layanan">
                        Pelayanan
                    </x-ui.button>
                </li>

                {{-- @guest
                    <li>
                        <x-ui.button class="bg-green-pea-600 hover:bg-green-pea-500" href="{{ route('login') }}">
                            Login
                        </x-ui.button>
                    </li>
                @else
                    <li>
                        <x-ui.button class="bg-green-pea-600 hover:bg-green-pea-500" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </x-ui.button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest --}}
            </ul>

            <div class="md:hidden">
                <x-ui.button x-on:click="isOpen = !isOpen" variant="outline" size="icon">
                    <i class="fa-solid fa-bars h-6 w-6"></i>
                </x-ui.button>
            </div>
        </div>
    </section>

    {{-- Navigation Links Mobile --}}
    <section id="mobile-menu"
        class="fixed right-0 top-0 z-50 h-screen w-screen bg-background transition-transform duration-300 ease-in-out sm:max-w-sm md:hidden"
        x-show="isOpen" x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-x-full transform" x-transition:enter-end="translate-x-0 transform"
        x-transition:leave="transition duration-300 ease-in" x-transition:leave-start="translate-x-0 transform"
        x-transition:leave-end="translate-x-full transform">
        <x-ui.button x-on:click="isOpen = !isOpen" variant="outline" size="icon" class="absolute right-8 top-2">
            <i class="fa-solid fa-x h-6 w-6"></i>
        </x-ui.button>
        <div class="flex h-screen flex-col justify-between">
            <ul class="container flex flex-col gap-y-2 pt-16">
                <li>
                    <x-ui.button variant="ghost" class="w-full justify-start" href="/">
                        Beranda
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.dropdown.root>
                        <x-ui.dropdown.button variant="ghost" class="w-full justify-start">
                            Informasi Desa
                        </x-ui.dropdown.button>
                        <x-ui.dropdown.content>
                            <x-ui.dropdown.item>
                                <a href="/perangkat" class="w-full text-left">
                                    Perangkat Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/berita" class="w-full text-left">
                                    Berita Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/penghargaan" class="w-full text-left">
                                    Penghargaan Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/wisata" class="w-full text-left">
                                    Wisata Desa
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/infodesa/produk" class="w-full text-left">
                                    Produk UMKM
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="/#section-layanan" class="w-full text-left">
                                    Layanan
                                </a>
                            </x-ui.dropdown.item>
                        </x-ui.dropdown.content>
                    </x-ui.dropdown.root>
                </li>

                <li>
                    <x-ui.button variant="ghost" class="w-full justify-start" href="/profil">
                        Profil
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button variant="ghost" class="w-full justify-start" href="/infografis">
                        Infografis
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button variant="ghost" class="w-full justify-start" href="/#section-layanan">
                        Pelayanan
                    </x-ui.button>
                </li>

                {{-- @guest
                    <li>
                        <x-ui.button class="mt-4 w-full bg-green-pea-600 hover:bg-green-pea-500"
                            href="{{ route('login') }}">
                            Login
                        </x-ui.button>
                    </li>
                @else
                    <li>
                        <x-ui.button class="mt-4 w-full bg-green-pea-600 hover:bg-green-pea-500"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                            Logout
                        </x-ui.button>
                        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest --}}
            </ul>
        </div>
    </section>
</nav>
