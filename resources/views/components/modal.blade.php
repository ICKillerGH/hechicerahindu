<div
    x-data="{ open: false }"
    x-on:keydown.escape.window="open = false"
    x-init="$watch('open', open => {
        if (open) {
            document.body.classList.add('overflow-hidden');
        } else {
            document.body.classList.remove('overflow-hidden');
        }
    })"
>
    <span x-on:click="open = true">
        {{ $trigger }}
    </span>

    <div
        class="fixed inset-0 z-10 block bg-black bg-opacity-50 overflow-y-auto"
        x-cloak
        x-show="open"
        x-on:click.self="open = false"
    >
        <div class="my-8 mx-auto max-w-xl flex justify-center items-center">
            <div class="w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
