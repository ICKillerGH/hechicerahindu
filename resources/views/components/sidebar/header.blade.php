<div {{ $attributes->merge(['class' => 'h-full flex items-center px-6'])->only('class') }}>
    {{ $slot }}
</div>
