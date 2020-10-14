@props([
    'tag' => 'button',
    'outlined' => false,
])

<x-button.base
    {{ $attributes->merge(['class' => $outlined
        ? 'border border-indigo-600 hover:bg-indigo-600 text-indigo-600 hover:text-white focus:shadow-outline-indigo-500'
        : 'bg-indigo-600 hover:bg-indigo-700 text-white border border-indigo-600 hover:border-indigo-700 focus:shadow-outline-indigo-500'
    ]) }}
    :tag="$tag"
>
    {{ $slot }}
</x-button.base>
