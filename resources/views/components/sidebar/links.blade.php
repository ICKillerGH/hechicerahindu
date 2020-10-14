<nav {{ $attributes->merge(['class' => 'p-2 space-y-1'])->only('class') }}>
    {{ $slot }}
</nav>
