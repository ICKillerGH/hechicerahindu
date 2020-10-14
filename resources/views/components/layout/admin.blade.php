@props([
    'title' => null,
])

<x-html :title="$title">
    <x-slot name="beforeCss">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <livewire:styles />
    </x-slot>

    <div class="font-nunito flex h-screen" x-data="{ sidebarOpen: false }">
        <div
            class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"
            x-bind:class="sidebarOpen ? 'block' : 'hidden'"
            x-on:click="sidebarOpen = false"
        ></div>

        <div
            class="fixed lg:static inset-y-0 z-30 w-64 transition duration-100 transform -translate-x-full lg:translate-x-0"
            x-bind:class="{ 'translate-x-0 ease-out': sidebarOpen, '-translate-x-full ease-in': ! sidebarOpen }"
        >
            {{ $sidebar }}
        </div>

        <div class="flex-1 flex flex-col h-screen overflow-x-hidden overflow-y-auto">
            {{ $slot }}
        </div>
    </div>

    <x-slot name="beforeScripts">
        <livewire:scripts />
    </x-slot>
</x-html>
