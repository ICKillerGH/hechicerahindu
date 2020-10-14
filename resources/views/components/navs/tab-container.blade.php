<nav {{ $attributes->merge(['class' => 'flex border-b border-gray-300'])->only('class') }}>
    {{ $slot }}
</nav>
