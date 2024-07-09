<!-- Dropdown Button -->
<button
    x-ref="button"
    x-on:click="toggle()"
    :aria-expanded="open"
    :aria-controls="$id('dropdown-button')"
    {{
        $attributes->merge([
            "class" => "inline-flex h-10 items-center whitespace-nowrap rounded-md px-4 py-2 text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50",
            "type" => "button",
        ])
    }}
>
    {{ $slot }}

    <i class="fa-solid fa-chevron-down ml-2 h-4 w-4"></i>
</button>
