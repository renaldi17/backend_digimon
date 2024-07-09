{{--
    Dropdown Button Component
    
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

<x-ui.button
    x-ref="button"
    x-on:click="toggle()"
    ::aria-expanded="open"
    ::aria-controls="$id('dropdown-button')"
    {{ $attributes }}
>
    {{ $slot }}

    <i class="fa-solid fa-chevron-down ml-2 h-4 w-4"></i>
</x-ui.button>
