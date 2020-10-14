@props([
    'target' => '',
    'grow' => false,
    'activeClass' => '',
])

@php
    $activeClass .= ' -mb-px border border-b-0 border-gray-300 text-gray-800';
@endphp

<div
    {{ $attributes->merge([
        'class' => 'flex items-center justify-center bg-white px-4 py-2 rounded-t cursor-pointer text-gray-700' . ($grow ? ' flex-grow' : '')
    ])->only('class') }}
    x-on:click="currentTab = '{{ $target }}'"
    x-bind:class="{ '{{ $activeClass }}': currentTab === '{{ $target }}' }"
>
    {{ $slot }}
</div>
