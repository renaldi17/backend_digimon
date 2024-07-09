{{--
    Card Title Component
    
    Example:
    ```
    <x-ui.card.root>
    <x-ui.card.image>
    </x-ui.card.image>
    
    <x-ui.card.header>
    </x-ui.card.header>
    
    <x-ui.card.description>
    </x-ui.card.description>
    
    <x-ui.card.content>
    </x-ui.card.content>
    <x-ui.card.footer>
    </x-ui.card.footer>
    
    </x-ui.card.root>
    ```
    
    Note:
    - Required Dependencies: Tailwind CSS, Laravel Tailwind Merge
--}}

<h3
    {{ $attributes->twMerge("text-2xl font-semibold leading-none tracking-tight") }}
>
    {{ $slot }}
</h3>
