@props([
    'hasInput' => false,
])

<div class="flex flex-col sm:flex-row">
    @if (isset($label))
        <div class="p-4 pb-2 sm:pb-4 w-full sm:w-64 flex-shrink-0 text-gray-700 font-semibold">
            {{ $label }}
        </div>
    @endif

    <div class="p-4 pt-0 sm:pt-4 flex-grow">
        <div class="{{ $hasInput ? 'w-full md:w-3/4 md:max-w-lg' : '' }}">
            {{ $slot }}
        </div>
    </div>
</div>
