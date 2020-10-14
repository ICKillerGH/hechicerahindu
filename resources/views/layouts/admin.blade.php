<x-layout.admin>
    <x-slot name="sidebar">
        <x-sidebar class="bg-indigo-600 text-white">
            <x-slot name="header">
                <x-sidebar.header class="text-2xl font-semibold">
                    {{ config('app.name') }}
                </x-sidebar.header>
            </x-slot>

            <x-sidebar.links>
                {{-- Usuarios --}}
                <x-sidebar.link
                    active-class="bg-indigo-800"
                    inactive-class="hover:bg-indigo-700 text-gray-300"
                    :href="url('/')"
                >
                    <x-slot name="icon">
                        <x-icon.users />
                    </x-slot>
                    Usuarios
                </x-sidebar.link>

                {{-- Peticiones de contacto --}}
                <x-sidebar.link
                    active-class="bg-indigo-800"
                    inactive-class="hover:bg-indigo-700 text-gray-300"
                    :href="url('/')"
                >
                    <x-slot name="icon">
                        <x-icon.chat />
                    </x-slot>
                    Peticiones de contacto
                </x-sidebar.link>
            </x-sidebar.links>
        </x-sidebar>
    </x-slot>

    <x-admin.content class="space-y-4 bg-gray-100">
        <x-slot name="header">
            <x-admin.header>
                <x-sidebar.toggler class="lg:hidden">
                    <x-icon.menu class="w-6 h-6 text-gray-800" />
                </x-sidebar.toggler>
            </x-admin.header>
        </x-slot>

    </x-admin.content>
</x-layout.admin>
