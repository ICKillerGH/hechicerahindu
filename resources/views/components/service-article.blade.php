@props([
    'title',
    'imageUrl',
    'reversed' => false
])

<article {{ $attributes->merge(['class' => 'flex flex-col sm:flex-row']) }}>
    <div class="sm:w-1/2 {{ $reversed ? 'sm:pl-3' : 'sm:pr-3' }}">
        <h3 class="font-messeri text-3xl font-bold">{{ $title }}</h3>
        <p class="mt-3 text-lg">
            {{ $slot }}
        </p>
    </div>
    <div class="sm:w-1/2 mb-3 sm:mb-0 order-first {{ $reversed ? 'sm:pr-3' : 'sm:pl-3 sm:order-none' }}">
        <img
            src="{{ $imageUrl }}"
            alt="{{ $title }}"
            class="w-full block rounded-lg object-cover"
            style="height: 275px"
        >
    </div>
</article>
