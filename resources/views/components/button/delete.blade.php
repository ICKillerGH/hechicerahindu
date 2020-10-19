<button
    type="button"
    class="w-5 h-5"
    title="Eliminar"
    x-data
    x-on:click="$dispatch('delete', {{ $resourceId }})"
>
    <x-icon.trash />
</button>
