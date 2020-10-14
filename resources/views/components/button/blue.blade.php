@props([
    'tag' => 'button',
    'outlined' => false,
])

<x-button.base
    {{ $attributes->merge(['class' => $outlined
        ? 'border border-blue-600 hover:bg-blue-600 text-blue-600 hover:text-white focus:shadow-outline-blue-500'
        : 'bg-blue-600 hover:bg-blue-700 text-white border border-blue-600 hover:border-blue-700 focus:shadow-outline-blue-500'
    ]) }}
    :tag="$tag"
>
    {{ $slot }}
</x-button.base>
