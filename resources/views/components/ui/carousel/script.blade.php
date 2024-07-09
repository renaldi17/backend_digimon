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
    $randomStr = uniqid();
@endphp

<script type="text/javascript">
    const emblaCarousel{{ $randomStr }} = document.querySelector(
        {{ Js::from($selector) }},
    );
    const options{{ $randomStr }} = { loop: true };
    const plugins{{ $randomStr }} = [EmblaCarouselAutoplay()];
    const emblaCarouselApi{{ $randomStr }} = EmblaCarousel(
        emblaCarousel{{ $randomStr }},
        options{{ $randomStr }},
        plugins{{ $randomStr }},
    );
</script>
