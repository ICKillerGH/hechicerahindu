@props(['tag' => 'div'])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'divide-y divide-gray-200 bg-white border border-gray-200 rounded-md shadow overflow-hidden']) }}
>
    @if (isset($header))
        {{ $header }}
    @endif

    {{ $slot }}

    @if (isset($footer))
        {{ $footer }}
    @endif
</{{ $tag }}>
