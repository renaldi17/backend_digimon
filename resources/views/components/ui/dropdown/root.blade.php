{{--
    Dropdown Root Component
    
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
    x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }

            this.$refs.button.focus()

            this.open = true
        },
        close(focusAfter) {
            if (! this.open) return

            this.open = false

            focusAfter && focusAfter.focus()
        },
    }"
    x-on:keydown.escape.prevent.stop="close($refs.button)"
    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
    {{
        $attributes->merge([
            "x-id" => "['dropdown-button']",
        ])
    }}
    {{ $attributes->twMerge("relative") }}
>
    {{ $slot }}
</div>
