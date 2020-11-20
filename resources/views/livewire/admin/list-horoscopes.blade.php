<div>
    <x-section-heading>
        Horóscopos

        <x-slot name="rightSide">
            <x-button
                color="green"
                tag="a"
                :href="route('admin.horoscopes.create')"
            >
                Crear horóscopo
            </x-button>
        </x-slot>
    </x-section-heading>

    <x-table wire:loading.class="opacity-75 pointer-events-none">
        <x-slot name="thead">
            <x-table.th>ID</x-table.th>
            <x-table.th>Signo</x-table.th>
            <x-table.th>Desde</x-table.th>
            <x-table.th>Hasta</x-table.th>
            <x-table.th></x-table.th>
        </x-slot>

        <x-slot name="tbody">
            @forelse ($horoscopes as $horoscope)
                <tr wire:key="row{{ $horoscope->id }}">
                    <x-table.td>{{ $horoscope->id }}</x-table.td>
                    <x-table.td>{{ __($horoscope->zodiac_sign) }}</x-table.td>
                    <x-table.td>{{ $horoscope->from->format('d/m/Y') }}</x-table.td>
                    <x-table.td>{{ $horoscope->to->format('d/m/Y') }}</x-table.td>
                    <x-table.td for-actions>
                        <x-button.delete
                            x-on:delete="
                                confirm('¿Está seguro de eliminar este horóscopo?') &&

                                $wire.deleteHoroscope({{ $horoscope->id }});
                            "
                        />
                    </x-table.td>
                </tr>
            @empty
                <x-table.empty />
            @endforelse
        </x-slot>
    </x-table>
</div>
