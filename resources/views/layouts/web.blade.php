<x-html :title="$title ?? null">
    <x-slot name="head">
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600;700&family=Nunito&family=Shrikhand&display=swap" rel="stylesheet">

        <livewire:styles />

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </x-slot>

    <div class="min-h-screen bg-primary text-white pb-12">
        {{-- Header --}}
        <div class="container" id="inicio">
            <div class="flex flex-col sm:flex-row items-center py-4">
                <h1 class="font-shrikhand text-3xl md:text-4xl">
                    <a href="#">Soluciones amorosas</a>
                </h1>

                <div class="sm:ml-auto flex items-center">
                    <span class="w-5 h-5">
                        <x-icons.phone />
                    </span>
                    <a href="https://wa.link/1468wn" target="_blank" class="ml-1 text-xl font-semibold">+57 320 9983427</a>
                </div>
            </div>
        </div>

        {{-- Menú --}}
        <section class="bg-primary-light">
            <div class="container">
                {{-- 64px --}}
                <nav class="flex flex-col sm:flex-row sm:items-center">
                    <div class="flex sm:hidden justify-between py-5">
                        <button type="button" class="w-6 h-6 focus:outline-none" id="btnToggleMenu">
                            <x-icons.menu />
                        </button>

                        <div>
                            {{-- Facebook Icon --}}
                            <a href="#" target="_blank" class="w-5 h-5 inline-block">
                                <x-icons.facebook />
                            </a>

                            {{-- Instagram Icon --}}
                            <a href="https://www.instagram.com/hechicerahindu/" target="_blank" class="w-5 h-5 inline-block mx-2">
                                <x-icons.instagram />
                            </a>

                            {{-- Whatsapp Icon --}}
                            <a href="https://wa.link/1468wn" target="_blank" class="w-5 h-5 inline-block">
                                <x-icons.whatsapp />
                            </a>
                        </div>
                    </div>

                    <ul
                        class="hidden sm:flex flex-col sm:flex-row bg-primary-light"
                        id="menu"
                        x-data="menuComponent()"
                    >
                        <li class="py-3 sm:pr-4 sm:py-5 font-semibold">
                            <a href="{{ route('home') }}" x-on:click="scrollToId($event, 'inicio')">Inicio</a>
                        </li>
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold">
                            <a href="{{ route('home') }}#servicios" x-on:click="scrollToId($event, 'servicios')">Servicios</a>
                        </li>
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold">
                            <a href="{{ route('home') }}#testimonios" x-on:click="scrollToId($event, 'testimonios')">Testimonios</a>
                        </li>
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold">
                            <a href="{{ route('home') }}#horoscopos" x-on:click="scrollToId($event, 'horoscopos')">Horóscopos</a>
                        </li>
                        <li class="pt-3 pb-6 sm:px-4 sm:py-5 font-semibold">
                            <a href="{{ route('home') }}#contacto" x-on:click="scrollToId($event, 'contacto')">Contacto</a>
                        </li>
                    </ul>

                    <div class="hidden sm:block ml-auto">
                        {{-- Facebook Icon --}}
                        <a href="#" target="_blank" class="w-5 h-5 inline-block">
                            <x-icons.facebook />
                        </a>

                        {{-- Instagram Icon --}}
                        <a href="https://www.instagram.com/hechicerahindu/" target="_blank" class="w-5 h-5 inline-block mx-2">
                            <x-icons.instagram />
                        </a>

                        {{-- Whatsapp Icon --}}
                        <a href="https://wa.link/1468wn" target="_blank" class="w-5 h-5 inline-block">
                            <x-icons.whatsapp />
                        </a>
                    </div>
                </nav>
            </div>
        </section>

        @yield('content')

        <div class="fixed z-10 flex items-center justify-center" style="bottom: 2rem; right: 2rem;">
            <span class="hidden sm:block bg-white text-sm text-gray-900 border border-gray-400 shadow-md mr-3 px-3 py-1 rounded-md">
                Hola ¿Necesitas ayuda?
            </span>
            <a href="https://wa.link/1468wn" target="_blank">
                <img src="{{ asset('images/whatsapp-green.svg') }}" alt="Link a whatsapp" class="block w-12 h-12 sm:w-16 sm:h-16">
            </a>
        </div>
    </div>

    <x-slot name="scripts">
        <livewire:scripts />

        <script src="{{ mix('js/app.js') }}"></script>

        <script>
            const menuComponent = () => ({
                scrollToId(event, id) {
                    const $element = document.getElementById(id);

                    if ($element === null) return;

                    event.preventDefault();

                    scrollTo({
                        top: $element.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        </script>
    </x-slot>
</x-html>
