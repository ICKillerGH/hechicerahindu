@props([
    'identifier' => ''
])

<div
    x-show="currentTab === '{{ $identifier }}'"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    {{ $attributes->whereStartsWith(['x-transition:', 'class']) }}
>
    {{ $slot }}
</div>
