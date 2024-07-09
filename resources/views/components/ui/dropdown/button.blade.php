<!-- Dropdown Button -->
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
