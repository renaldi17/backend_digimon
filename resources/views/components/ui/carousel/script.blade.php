{{--
    Carousel Script Component
    
    Use it in the bottom of the page to initialize the carousel.
    
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

@php
    $selector = "#embla-" . $id;
@endphp

<script type="text/javascript">
    const emblaCarousel1 = document.querySelector({{ Js::from($selector) }});
    const options = { loop: true };
    const plugins = [EmblaCarouselAutoplay()];
    const emblaCarouselApi1 = EmblaCarousel(emblaCarousel1, options, plugins);
</script>
