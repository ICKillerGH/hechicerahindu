<div>
    <label
        for="{{ $id }}"
        class="h-10 flex items-center space-x-2"
        x-data="{ checked: false }"
    >
        <span
            tabindex="0"
            class="w-4 h-4 inline-flex items-center border border-gray-500 text-white rounded focus:outline-none {{ $errorClass }}"
            x-bind:class="{ 'bg-blue-500': checked }"
            x-on:keydown="if ($event.keyCode === 32) checked = ! checked;"
        >
            <x-icon.check class="w-5 h-5" x-bind:class="{ 'opacity-0': ! checked }" />
        </span>

        @if ($label)
            <span>{{ $label }}</span>
        @endif

        <input
            type="checkbox"
            id="{{ $id }}"
            @if ($name) name="{{ $name }}" @endif
            class="hidden"
            x-model="checked"
        />
    </label>

    @if ($error)
        <span class="text-xs text-red-600">{{ $error }}</span>
    @endif
</div>
