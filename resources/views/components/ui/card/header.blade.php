{{--
    Card Header Component
    
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

<div
    {{ $attributes->twMerge("flex flex-col space-y-1.5 p-6") }}
>
    {{ $slot }}
</div>
