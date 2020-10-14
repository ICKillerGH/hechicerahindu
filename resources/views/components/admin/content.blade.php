<div class="flex-1 flex flex-col">
    @if (isset($header))
        <div class="h-16">
            {{ $header }}
        </div>
    @endif
    <main {{ $attributes->merge(['class' => 'flex-1 p-4'])->only('class') }}>
        {{ $slot }}
    </main>
</div>
