@props([
    'tag' => 'button'
])

@php
    throw_unless(in_array($tag, ['button', 'a']), new InvalidArgumentException('The allowed values for tag are:  button and a'));
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => 'px-3 py-2 inline-flex items-center justify-center font-semibold rounded-md cursor-pointer focus:outline-none shadow transition duration-200 disabled:opacity-75 disabled:pointer-events-none leading-5 z-0']) }}
>
    {{ $slot }}
</{{ $tag }}>
