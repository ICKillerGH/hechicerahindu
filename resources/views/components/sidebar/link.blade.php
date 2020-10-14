@props([
    'href' => '#',
    'active' => false,
    'activeClass' => '',
    'inactiveClass' => '',
])

<a
    href="{{ $href }}"
    class="flex items-center w-full px-3 py-2 space-x-2 font-bold text-base leading-6 rounded-md {{ $active ? $activeClass : $inactiveClass }}"
>
    @if (isset($icon))
        <span class="h-6 w-6">
            {{ $icon }}
        </span>
    @endif
    <span>
        {{ $slot }}
    </span>
</a>
