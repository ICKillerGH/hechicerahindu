<header
    {{ $attributes->merge(['class' => 'flex items-center h-full px-4 border-b border-gray-300 shadow-md'])->only('class') }}
>
    {{ $slot }}
</header>
