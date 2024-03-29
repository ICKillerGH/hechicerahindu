<div class="space-y-1">
    <x-input.label :for="$id" :text="$label" />

    <div {{ $attributes->merge(['class' => 'inline-block relative' . ($fullWidth ? ' w-full' : '')]) }}>
        <select
            @if ($name) name="{{ $name }}" @endif
            @if ($id) id="{{ $id }}" @endif
            class="inline-block w-full appearance-none bg-white border border-gray-300 px-4 py-2 pr-8 rounded-md shadow-sm leading-5 focus:outline-none {{ $errorClass }}"
        >
            {{ $slot }}
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>

    <x-input.error-msg :message="$error" />
</div>
