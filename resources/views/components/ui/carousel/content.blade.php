{{--
    Carousel Content Component
    
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

<div id="embla-container-{{ $id }}" {{ $attributes->twMerge("flex") }}>
    {{ $slot }}
</div>
