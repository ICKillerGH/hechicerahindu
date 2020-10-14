@props([
    'color' => 'blank'
])

@php
    $colors = [
        'blank' => '',
        'green' => 'bg-green-200 text-green-800',
        'blue' => 'bg-blue-200 text-blue-800',
        'yellow' => 'bg-yellow-300 text-yellow-800',
        'red' => 'bg-red-200 text-red-800',
        'indigo' => 'bg-indigo-200 text-indigo-800',
    ];

    throw_unless(
        in_array($color, $keys = array_keys($colors)),
        new InvalidArgumentException('The allowed values for color are: ' . implode(', ', $keys))
    );
@endphp

<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $colors[$color] }}">
    {{ $slot }}
</span>
