<button
    type="button"
    {{ $attributes->merge(['class' => 'w-auto h-auto focus:outline-none'])->only('class') }}
    x-on:click="sidebarOpen = ! sidebarOpen"
>
    {{ $slot }}
</button>
