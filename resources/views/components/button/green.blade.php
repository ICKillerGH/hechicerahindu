@props([
    'tag' => 'button',
    'outlined' => false,
])

<x-button.base
    {{ $attributes->merge(['class' => $outlined
        ? 'border border-green-500 hover:bg-green-500 text-green-500 hover:text-white focus:shadow-outline-green-500'
        : 'bg-green-500 hover:bg-green-600 text-white border border-green-500 hover:border-green-600 focus:shadow-outline-green-500'
    ]) }}
    :tag="$tag"
>
    {{ $slot }}
</x-button.base>
