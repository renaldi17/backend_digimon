{{--
    Dropdown Item Component
    
    Example:
    ```
    <x-ui.dropdown.root>
    <x-ui.dropdown.button>
    Dropdown Button
    </x-ui.dropdown.button>
    
    <x-ui.dropdown.content>
    <x-ui.dropdown.item>
    Item 1
    </x-ui.dropdown.item>
    </x-ui.dropdown.content>
    
    </x-ui.dropdown.root>
    ```
    
    
    Note:
    - Required Dependencies: Alpine.js, Tailwind CSS, Laravel Tailwind Merge
--}}

<button
    {{ $attributes->twMerge("relative w-full flex select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors hover:bg-accent focus:bg-accent focus:text-accent-foreground disabled:text-muted") }}
>
    {{ $slot }}
</button>
