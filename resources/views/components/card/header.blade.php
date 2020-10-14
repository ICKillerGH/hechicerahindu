@props(['tag' => 'header'])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'flex items-center px-4 py-3 bg-gray-50 text-xl leading-tight']) }}
>
    {{ $slot }}
</{{ $tag }}>
