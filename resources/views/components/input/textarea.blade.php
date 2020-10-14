<div class="space-y-1">
    <x-input.label :for="$id" :text="$label" />

    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        rows="{{ $rows }}"
        {{ $attributes->merge([
            'class' => 'inline-block px-3 py-2 border border-gray-300 rounded-md leading-5 focus:outline-none shadow-sm ' . $errorClass . ($fullWidth ? ' w-full' : '')
        ]) }}
    >{{ $attributes['value'] ?? '' }}</textarea>

    <x-input.error-msg :message="$error" />
</div>
