<div>
    <x-section-heading>
        Mensajes de contacto
    </x-section-heading>

    <x-table
        wire:loading.class="opacity-75 pointer-events-none"
        x-data="tableComponent()"
        x-on:delete="deleteMessage($event.detail)"
        x-on:mark-as-seen="markAsSeen($event.detail)"
    >
        <x-slot name="thead">
            <x-table.th>ID</x-table.th>
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Teléfono</x-table.th>
            <x-table.th>Asunto</x-table.th>
            <x-table.th>Mensaje</x-table.th>
            <x-table.th>Visto</x-table.th>
            <x-table.th></x-table.th>
        </x-slot>

        <x-slot name="tbody">
            @forelse ($messages as $message)
                <tr wire:key="{{ $message->id }}">
                    <x-table.td>{{ $message->id }}</x-table.td>
                    <x-table.td>{{ $message->name }}</x-table.td>
                    <x-table.td>{{ $message->phone }}</x-table.td>
                    <x-table.td>{{ $message->subject }}</x-table.td>
                    <x-table.td>{{ $message->message }}</x-table.td>
                    <x-table.td>{{ $message->is_seen ? 'Si' : 'No' }}</x-table.td>
                    <x-table.td class="space-x-1 text-right text-gray-700">
                        @unless ($message->is_seen)
                            <button
                                type="button"
                                class="w-5 h-5"
                                title="Marcar como visto"
                                x-data
                                x-on:click="$dispatch('mark-as-seen', {{ $message->id }})"
                            >
                                <x-icon.check />
                            </button>
                        @endunless
                        <x-button.delete :resource-id="$message->id" />
                    </x-table.td>
                </tr>
            @empty
                <x-table.empty />
            @endforelse
        </x-slot>

        @if ($messages->hasPages())
            <x-slot name="footer">
                {{ $messages->links() }}
            </x-slot>
        @endif
    </x-table>
</div>

@push('scripts')
<script>
    const tableComponent = () => ({
        deleteMessage(messageId) {
            confirm('¿Está seguro de eliminar el mensaje?') &&

            this.$wire.deleteMessage(messageId)
                .then(deleted => console.log(deleted));
        },
        markAsSeen(messageId) {
            confirm('¿Está seguro de marcar este mensaje como leido?') &&

            this.$wire.markAsSeen(messageId)
                .then(res => console.log(res));
        }
    });
</script>
@endpush
