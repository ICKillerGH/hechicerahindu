<div>
    <x-section-heading>Usuarios</x-section-heading>

    <x-table
        wire:loading.class="opacity-75 pointer-events-none"
        x-data="{
            deleteUser(e) {
                let target = e.target;

                for (let i = 0; this.elementIsNotBtn(target) && target.parentElement && i < 5 ;i++) {
                    target = target.parentElement;
                }

                if (! confirm(`¿Está seguro de eliminar a ${target.dataset.name}?`)) {
                    return;
                }

                this.$wire.deleteUser(target.dataset.id)
                    .then(deleted => console.log(deleted));
            },
            elementIsNotBtn: el => el.tagName.toUpperCase() !== 'BUTTON'
        }"
    >
        <x-slot name="thead">
            <x-table.th>ID</x-table.th>
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Correo electrónico</x-table.th>
            <x-table.th>Rol</x-table.th>
            <x-table.th></x-table.th>
        </x-slot>

        <x-slot name="tbody">
            @foreach ($users as $user)
                {{-- <tr wire:key="{{ $user->id }}"> --}}
                <tr>
                    <x-table.td>{{ $user->id }}</x-table.td>
                    <x-table.td>{{ $user->name }}</x-table.td>
                    <x-table.td>{{ $user->email }}</x-table.td>
                    <x-table.td>{{ ucfirst($user->role) }}</x-table.td>
                    <x-table.td class="space-x-1 text-right text-gray-700">
                        <a href="#" class="inline-block" title="Editar usuario">
                            <x-icon.pencil-alt class="w-5 h-5" />
                        </a>
                        @can('delete', $user)
                            <button
                                type="button"
                                title="Eliminar usuario"
                                x-on:click.stop="deleteUser"
                                data-id="{{ $user->id }}"
                                data-name="{{ $user->name }}"
                            >
                                <x-icon.trash class="w-5 h-5" />
                            </button>
                        @endcan
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
