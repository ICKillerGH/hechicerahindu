<div class="space-y-1">
    <x-input.label :for="$id" :text="$label" />

    <textarea
        name="content"
        id="{{ $id }}"
        x-data
        x-init="() => tinymce.init({
            selector: '#{{ $id }}',
            {{-- language: 'es', --}}
            menubar: false,
            toolbar: 'undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
            setup(editor) {
                editor.on('change', () => $dispatch('input', editor.getContent()))
            }
        })"
        {{ $attributes->whereStartsWith(['wire']) }}
        wire:ignore
    ></textarea>

    <x-input.error-msg :message="$error" />
</div>
