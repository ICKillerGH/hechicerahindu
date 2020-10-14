<div>
    <x-section-heading>Usuarios</x-section-heading>

    <x-table>
        <x-slot name="thead">
            <x-table.th>ID</x-table.th>
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Correo electrónico</x-table.th>
            <x-table.th></x-table.th>
        </x-slot>

        <x-slot name="tbody">
            @foreach ($users as $user)
                <tr>
                    <x-table.td>{{ $user->id }}</x-table.td>
                    <x-table.td>{{ $user->name }}</x-table.td>
                    <x-table.td>{{ $user->email }}</x-table.td>
                    <x-table.td class="space-x-1 text-right text-gray-700">
                        <a href="#" class="inline-block" title="Editar usuario">
                            <x-icon.pencil-alt class="w-5 h-5" />
                        </a>
                        <button type="button" title="Eliminar usuario">
                            <x-icon.trash class="w-5 h-5" />
                        </button>
                    </x-table.td>
                </tr>
            @endforeach
        </x-slot>

        @if ($users->hasPages())
            <x-slot name="footer">
                {{ $users->links() }}
            </x-slot>
        @endif
    </x-table>
</div>
