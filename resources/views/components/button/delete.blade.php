<button
    type="button"
    title="Eliminar"
    x-data
    x-on:click="$dispatch('delete', {{ $resourceId }})"
    {{ $attributes->merge(['class' => 'w-5 h-5']) }}
>
    <x-icon.trash />
</button>
