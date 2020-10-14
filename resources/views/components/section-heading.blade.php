@props([
    'title',
])

<div class="flex justify-between items-center">
    <h2 class="text-3xl font-semibold">{{ $title }}</h2>
    <div>
        {{ $rightSide }}
    </div>
</div>
