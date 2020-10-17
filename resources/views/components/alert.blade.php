@unless ($slot->isEmpty() && empty($message))
    <div {{ $attributes->merge(['class' => 'px-4 py-3 rounded-md shadow ' . $colorClass]) }}>
        {{ $slot->isEmpty() ? $message : $slot }}
    </div>
@endif
