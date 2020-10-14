@props([
    'target' => '',
    'grow' => false,
    'activeClass' => '',
])

@php
    $activeClass = 'bg-gray-300 hover:bg-gray-300 text-gray-800 font-semibold'. $activeClass;
@endphp

<div
    {{ $attributes->merge([
        'class' => 'px-4 py-2 flex items-center justify-center text-gray-700 hover:bg-gray-200 rounded cursor-pointer'. ($grow ? ' flex-grow' : '')
    ])->only('class') }}
    x-on:click="currentTab = '{{ $target }}'"
    x-bind:class="{ '{{ $activeClass }}': currentTab === '{{ $target }}' }"
>
    {{ $slot }}
</div>
