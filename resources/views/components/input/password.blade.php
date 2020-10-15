<div class="space-y-1">
    <x-input.label :for="$id" :text="$label" />

    <input
        type="password"
        @if ($name) name="{{ $name }}" @endif
        @if ($id) id="{{ $id }}" @endif
        {{ $attributes->merge([
            'class' => 'inline-block px-3 py-2 border border-gray-300 rounded-md focus:outline-none leading-5 shadow-sm ' . $errorClass . ($fullWidth ? ' w-full' : '')
        ]) }}
    />

    <x-input.error-msg :message="$error" />
</div>
