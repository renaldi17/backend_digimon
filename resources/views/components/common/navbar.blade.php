<nav
    x-data="{ isOpen: false }"
    class="fixed top-0 flex min-h-12 w-full flex-col"
>
    {{-- Sosial Media --}}
    <section class="container bg-[#2C5D3C] py-2 text-zinc-50">
        <ul class="flex flex-col gap-y-2">
            <li>
                <a href="mailto:emailTegalmanggung@gmail.com">
                    <i class="fa-solid fa-envelope mr-2 h-4 w-4"></i>
                    emailTegalmanggung@gmail.com
                </a>
            </li>
            <li>
                <a href="tel:+6283522130922">
                    <i class="fa-solid fa-phone mr-2 h-4 w-4"></i>
                    (+62) 835-2213-0922
                </a>
            </li>
        </ul>
    </section>

    {{-- Navigation Links --}}
    <section class="container flex items-center justify-between py-2">
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

        <div>
            <button
                class="ring-offset-background focus-visible:ring-ring border-input bg-background hover:bg-accent hover:text-accent-foreground inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-md border text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
            >
                <i class="fa-solid fa-bars h-6 w-6"></i>
            </button>
        </div>
    </section>
</nav>
