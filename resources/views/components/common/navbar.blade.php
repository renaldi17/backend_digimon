<nav
    x-data="{ isOpen: false }"
    class="fixed top-0 flex min-h-12 w-full flex-col"
>
    {{-- Sosial Media --}}
    <section class="container hidden bg-[#2C5D3C] py-2 text-zinc-50 sm:block">
        <ul class="flex flex-col gap-y-2">
            <li>
                <a
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    href="mailto:emailTegalmanggung@gmail.com"
                >
                    <i class="fa-solid fa-envelope mr-2 h-4 w-4"></i>
                    emailTegalmanggung@gmail.com
                </a>
            </li>
            <li>
                <a
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                    href="tel:+6283522130922"
                >
                    <i class="fa-solid fa-phone mr-2 h-4 w-4"></i>
                    (+62) 835-2213-0922
                </a>
            </li>
        </ul>
    </section>

    {{-- Navigation Links --}}
    <section
        class="container flex items-center justify-between bg-background py-2 shadow"
    >
        <div class="flex items-center gap-x-2">
            <img
                class="h-8 w-8"
                src="https://pgpaud.upi.edu/wp-content/uploads/2019/09/logo-upi.png"
                alt="Logo UPI"
            />
            <h1 class="text-lg font-semibold tracking-wide">
                Desa TegalManggung
            </h1>
        </div>

        <div class="md:hidden">
            <button
                x-on:click="isOpen = !isOpen"
                class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md border border-input bg-background text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
            >
                <i class="fa-solid fa-bars h-6 w-6"></i>
            </button>
        </div>
    </section>

    {{-- Navigation Links Mobile --}}
    <section
        id="mobile-menu"
        class="fixed top-0 z-50 h-screen w-screen bg-background transition-transform duration-300 ease-in-out sm:hidden"
        x-show="isOpen"
        x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-x-full transform"
        x-transition:enter-end="translate-x-0 transform"
        x-transition:leave="transition duration-300 ease-in"
        x-transition:leave-start="translate-x-0 transform"
        x-transition:leave-end="translate-x-full transform"
    >
        <button
            x-on:click="isOpen = !isOpen"
            class="absolute right-8 top-2 inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md border border-input bg-background text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
        >
            <i class="fa-solid fa-x h-6 w-6"></i>
        </button>
        <div class="flex h-screen flex-col justify-between">
            <ul class="container flex flex-col gap-y-2 pt-16">
                <li>
                    <x-ui.button
                        variant="ghost"
                        class="w-full justify-start"
                        href="/"
                    >
                        Beranda
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.dropdown.root>
                        <x-ui.dropdown.button
                            variant="ghost"
                            class="w-full justify-start"
                        >
                            Informasi
                        </x-ui.dropdown.button>
                        <x-ui.dropdown.content>
                            <x-ui.dropdown.item>
                                <a href="#" class="w-full text-left">
                                    Informasi 1
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="#" class="w-full text-left">
                                    Informasi 2
                                </a>
                            </x-ui.dropdown.item>
                            <x-ui.dropdown.item>
                                <a href="#" class="w-full text-left">
                                    Informasi 3
                                </a>
                            </x-ui.dropdown.item>
                        </x-ui.dropdown.content>
                    </x-ui.dropdown.root>
                </li>

                <li>
                    <x-ui.button
                        variant="ghost"
                        class="w-full justify-start"
                        href="#"
                    >
                        Profil
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button
                        variant="ghost"
                        class="w-full justify-start"
                        href="#"
                    >
                        Infografis
                    </x-ui.button>
                </li>

                <li>
                    <x-ui.button
                        variant="ghost"
                        class="w-full justify-start"
                        href="#"
                    >
                        Pelayanan
                    </x-ui.button>
                </li>
            </ul>

            {{-- Sosial Media Mobile --}}
            <section class="container bg-[#2C5D3C] py-6 text-zinc-50">
                <ul class="flex flex-col gap-y-4">
                    <li>
                        <a
                            class="inline-flex h-10 w-full items-center justify-start whitespace-nowrap rounded-md px-4 py-2 text-sm font-medium ring-offset-background transition-colors hover:text-accent/75 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="mailto:emailTegalmanggung@gmail.com"
                        >
                            <i class="fa-solid fa-envelope mr-2"></i>
                            emailTegalmanggung@gmail.com
                        </a>
                    </li>
                    <li>
                        <a
                            class="inline-flex h-10 w-full items-center justify-start whitespace-nowrap rounded-md px-4 py-2 text-sm font-medium ring-offset-background transition-colors hover:text-accent/75 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="tel:+6283522130922"
                        >
                            <i class="fa-solid fa-phone mr-2"></i>
                            (+62) 835-2213-0922
                        </a>
                    </li>
                    <li class="flex justify-between gap-x-2">
                        <a
                            class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="#"
                        >
                            <i class="fa-brands fa-twitter h-6 w-6"></i>
                        </a>
                        <a
                            class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="#"
                        >
                            <i class="fa-brands fa-facebook-f h-6 w-6"></i>
                        </a>
                        <a
                            class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="#"
                        >
                            <i class="fa-brands fa-youtube h-6 w-6"></i>
                        </a>
                        <a
                            class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="#"
                        >
                            <i class="fa-brands fa-instagram h-6 w-6"></i>
                        </a>
                        <a
                            class="inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-[#FCE5AD] ring-offset-background transition-colors hover:text-[#F8C549] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            href="#"
                        >
                            <i class="fa-brands fa-linkedin h-6 w-6"></i>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </section>
</nav>
