<div>
    <x-section-heading>
        Mensajes de contacto
    </x-section-heading>

    <x-table wire:loading.class="opacity-75 pointer-events-none">
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
                <tr wire:key="row{{ $message->id }}">
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
                                x-on:click="
                                    confirm('¿Está seguro de marcar este mensaje como leido?') &&

                                    $wire.markAsSeen({{ $message->id }})
                                        .then(res => console.log(res));
                                "
                            >
                                <x-icon.check />
                            </button>
                        @endunless
                        <x-button.delete
                            :resource-id="$message->id"
                            x-on:delete="
                                console.log({{ $message->id }})
                                confirm('¿Está seguro de eliminar el mensaje?') &&

                                $wire.deleteMessage({{ $message->id }})
                                    .then(deleted => console.log(deleted));
                            "
                        />
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
