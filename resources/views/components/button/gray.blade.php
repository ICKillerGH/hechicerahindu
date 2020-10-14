@props([
    'tag' => 'button',
    'outlined' => false,
])

<x-button.base
    {{ $attributes->merge(['class' => $outlined
        ? 'bg-white hover:bg-gray-200 text-gray-700 border border-gray-300 focus:shadow-outline-gray-400'
        : 'bg-gray-100 hover:bg-gray-200 text-gray-900 border border-gray-300 focus:shadow-outline-gray-400'
    ]) }}
    :tag="$tag"
>
    {{ $slot }}
</x-button.base>
