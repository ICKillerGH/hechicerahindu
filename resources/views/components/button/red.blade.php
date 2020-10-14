@props([
    'tag' => 'button',
    'outlined' => false,
])

<x-button.base
    {{ $attributes->merge(['class' => $outlined
        ? 'border border-red-600 hover:bg-red-600 text-red-600 hover:text-white focus:shadow-outline-red-500'
        : 'bg-red-600 hover:bg-red-700 text-white border border-red-600 hover:border-red-700 focus:shadow-outline-red-500'
    ]) }}
    :tag="$tag"
>
    {{ $slot }}
</x-button.base>
