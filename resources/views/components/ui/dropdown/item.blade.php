<button
    {{
        $attributes->merge([
            "class" => "relative w-full flex select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors hover:bg-accent focus:bg-accent focus:text-accent-foreground disabled:text-muted",
        ])
    }}
>
    {{ $slot }}
</button>
