<x-layout.admin>
    <x-slot name="sidebar">
        <x-sidebar class="bg-indigo-600 text-white">
            <x-slot name="header">
                <x-sidebar.header class="text-2xl font-semibold">
                    {{ config('app.name') }}
                </x-sidebar.header>
            </x-slot>

            <x-sidebar.links>
                @foreach ($links as $link)
                    <x-sidebar.link
                        active-class="bg-indigo-800"
                        inactive-class="hover:bg-indigo-700 text-gray-300"
                        :href="$link['url']"
                        :active="$link['active']"
                    >
                        <x-slot name="icon">
                            <x-dynamic-component :component="$link['icon']" />
                        </x-slot>
                        {{ $link['text'] }}
                    </x-sidebar.link>
                @endforeach
            </x-sidebar.links>
        </x-sidebar>
    </x-slot>

    <x-admin.content class="space-y-4 bg-gray-50">
        <x-slot name="header">
            <x-admin.header>
                <x-sidebar.toggler class="lg:hidden">
                    <x-icon.menu class="w-6 h-6 text-gray-800" />
                </x-sidebar.toggler>

                <button
                    type="button"
                    class="inline-flex items-center justify-center ml-auto w-10 h-10 hover:bg-gray-200 rounded-full text-gray-700 focus:outline-none focus:shadow-outline"
                    title="Cerrar sesión"
                    x-data
                    x-on:click="document.getElementById('logoutForm').submit()"
                >
                    <x-icon.logout class="w-6 h-6" />
                </button>

                <form action="{{ route('logout') }}" method="POST" class="hidden" id="logoutForm">@csrf</form>
            </x-admin.header>
        </x-slot>

        @yield('content')
    </x-admin.content>
</x-layout.admin>
