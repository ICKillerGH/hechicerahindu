<div {{ $attributes->merge(['class' => 'w-full h-full overflow-x-hidden overflow-y-auto'])->only('class') }}>
    @if (isset($header))
        <div class="h-16">
            {{ $header }}
        </div>
    @endif

    {{ $slot }}
</div>
