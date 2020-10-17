<x-button.base
    :tag="$tag"
    {{ $attributes->merge([
        'class' => $colorClass
    ]) }}
>
    {{ $slot }}
</x-button.base>
