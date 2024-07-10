{{--
    Button Component
    
    This component represents a button element that can be customized with different variants and sizes.
    
    Available variables:
    - $variant: "default" | "destructive" | "outline" | "secondary" | "ghost" | "link"
    - $size: "default" | "sm" | "lg" | "icon"
    
    Usage:
    - To use this component, include it in your Blade template and pass the necessary variables.
    
    Example:
    ```
    <x-ui.button variant="default" size="default">
    Click me
    </x-ui.button>
    ```
    
    Note:
    - The component automatically detects whether to render an `<a>` or `<button>` element based on the presence of the `$href` variable.
    - Required Dependencies: Tailwind CSS, Laravel Tailwind Merge
--}}

@php
    // Base class for the button
    $baseClass = "inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50";

    // Variants for different button styles
    $variants = [
        "default" => "bg-primary text-primary-foreground hover:bg-primary/90",
        "destructive" => "bg-destructive text-destructive-foreground hover:bg-destructive/90",
        "outline" => "border border-input bg-background hover:bg-accent hover:text-accent-foreground",
        "secondary" => "bg-secondary text-secondary-foreground hover:bg-secondary/80",
        "ghost" => "hover:bg-accent hover:text-accent-foreground",
        "link" => "text-primary underline-offset-4 hover:underline",
    ];

    // Sizes for different button sizes
    $sizes = [
        "default" => "h-10 px-4 py-2",
        "sm" => "h-9 rounded-md px-3",
        "lg" => "h-11 rounded-md px-8",
        "icon" => "h-10 w-10",
    ];

    // Set default values if not provided
    $variant = $variant ?? "default";
    $size = $size ?? "default";

    // Generate the class for the button based on the variant and size
    $buttonClass = "{$baseClass} {$variants[$variant]} {$sizes[$size]}";
@endphp

@if (isset($href) && Str::length($href) > 0)
    <a {{ $attributes->twMerge($buttonClass) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->twMerge($buttonClass) }}>
        {{ $slot }}
    </button>
@endif
