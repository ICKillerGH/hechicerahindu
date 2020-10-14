@props([
    'title',
])

<div class="flex justify-between items-center">
    <h2 class="text-3xl font-semibold text-gray-900">{{ $slot }}</h2>
    @if(isset($rightSide))
        <div>
            {{ $rightSide }}
        </div>
    @endif
</div>
