<!-- Dropdown Content -->
<div
    x-ref="panel"
    x-show="open"
    x-transition.origin.top.left
    x-on:click.outside="close($refs.button)"
    {{
        $attributes->merge([
            "class" => "absolute left-0 z-50 w-full min-w-[8rem] overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground shadow-md",
            "style" => "display: none",
            ":id" => "\$id('dropdown-button')",
        ])
    }}
>
    {{ $slot }}
</div>
