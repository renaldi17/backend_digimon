{{--
    Dropdown Content Component
    
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

<div
    x-ref="panel"
    x-show="open"
    x-transition.origin.top.left
    x-on:click.outside="close($refs.button)"
    {{
        $attributes->merge([
            "style" => "display: none",
            ":id" => "\$id('dropdown-button')",
        ])
    }}
    {{ $attributes->twMerge("absolute left-0 z-50 w-full min-w-[8rem] overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground shadow-md") }}
>
    {{ $slot }}
</div>
