<div class="h-full overflow-y-auto overflow-x-hidden">
    @if (isset($header))
        <div class="h-16">
            {{ $header }}
        </div>
    @endif
    <main {{ $attributes->merge(['class' => 'p-4'])->only('class') }}>
        {{ $slot }}
    </main>
</div>
