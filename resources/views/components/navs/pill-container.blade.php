<nav {{ $attributes->merge(['class' => 'flex space-x-2 mb-2'])->only('class') }}>
    {{ $slot }}
</nav>
