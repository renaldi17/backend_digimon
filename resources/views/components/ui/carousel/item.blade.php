{{--
    Carousel Item Component
    
    Example:
    ```
    <x-ui.carousel.root>
    <x-ui.carousel.content>
    <x-ui.carousel.item>
    Item 1
    </x-ui.carousel.item>
    </x-ui.carousel.content>
    
    </x-ui.carousel.root>
    
    
    <x-ui.carousel.script>
    </x-ui.carousel.script>
    ```
    
    Note:
    - Required Dependencies: Embla-carousel, Tailwind CSS, Laravel Tailwind Merge
--}}

<div
    {{ $attributes->twMerge("min-w-0 flex-shrink-0 flex-grow-0 basis-full") }}
>
    {{ $slot }}
</div>
