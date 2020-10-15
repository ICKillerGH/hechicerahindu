<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Hechicera hindu</title>

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600;700&family=Nunito&family=Shrikhand&display=swap" rel="stylesheet">

    <livewire:styles />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="min-h-screen bg-primary text-white pb-12">
        {{-- Header --}}
        <div class="container">
            <div class="flex flex-col sm:flex-row items-center py-4">
                <h1 class="font-shrikhand text-4xl">
                    <a href="#">Hechicera hindú</a>
                </h1>

                <div class="sm:ml-auto flex items-center">
                    <span class="w-5 h-5">
                        <x-icons.phone />
                    </span>
                    <a href="https://wa.link/qntznx" target="_blank" class="ml-1 text-xl font-semibold">+57 312 6890051</a>
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
                            <a href="#" class="w-5 h-5 inline-block">
                                <x-icons.facebook />
                            </a>

                            {{-- Instagram Icon --}}
                            <a href="#" class="w-5 h-5 inline-block mx-2">
                                <x-icons.instagram />
                            </a>

                            {{-- Whatsapp Icon --}}
                            <a href="#" class="w-5 h-5 inline-block">
                                <x-icons.whatsapp />
                            </a>
                        </div>
                    </div>

                    <ul class="hidden sm:flex flex-col sm:flex-row bg-primary-light" id="menu">
                        <li class="py-3 sm:pr-4 sm:py-5 font-semibold"><a href="#">Inicio</a></li>
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold"><a href="#servicios">Servicios</a></li>
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold"><a href="#testimonios">Testimonios</a></li>
                        {{-- <li class="py-3 sm:px-4 sm:py-5 font-semibold"><a href="#">Horóscopo</a></li> --}}
                        <li class="pt-3 pb-6 sm:px-4 sm:py-5 font-semibold"><a href="#contacto">Contacto</a></li>
                    </ul>

                    <div class="hidden sm:block ml-auto">
                        {{-- Facebook Icon --}}
                        <a href="#" class="w-5 h-5 inline-block">
                            <x-icons.facebook />
                        </a>

                        {{-- Instagram Icon --}}
                        <a href="https://www.instagram.com/hechicerahindu/" target="_blank" class="w-5 h-5 inline-block mx-2">
                            <x-icons.instagram />
                        </a>

                        {{-- Whatsapp Icon --}}
                        <a href="#" class="w-5 h-5 inline-block">
                            <x-icons.whatsapp />
                        </a>
                    </div>
                </nav>
            </div>
        </section>

        <section class="swiper-container" id="hero-slider">
            <div class="swiper-wrapper">
                {{-- Atendido por los mejores guias espirtuales --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/candle.png'); background-size: cover; background-position: right"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2">
                            <p class="font-messeri text-4xl md:text-5xl text-center md:text-left leading-tight">Atendido por los mejores guias espirtuales</p>
                            <p class="mt-4 text-xl text-center md:text-left">
                                Triunfa en la vida, el amor y la salud. Realizamos mejores hechizos con resultados inmediatos
                                y 100% garantizados.
                            </p>
                            <div class="text-center md:text-left">
                                <a
                                    href="#contacto"
                                    class="mt-4 px-5 py-3 inline-block bg-secondary hover:bg-secondary-light text-xl rounded-lg"
                                    >
                                    Contactanos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Amarres efectivos --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/hands.png'); background-size: cover;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2 text-center md:text-left">
                            <p class="font-messeri text-5xl leading-tight">Amarres efectivos</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="https://wa.link/qntznx" target="_blank"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 312 6890051
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Parejas del mismo sexo --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/gay_couple.jpg'); background-size: cover; background-position: right;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2 text-center md:text-left">
                            <p class="font-messeri text-5xl leading-tight">Parejas del mismo sexo</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="https://wa.link/qntznx" target="_blank"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 312 6890051
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Lecturas de tarot --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/tarot-slide.jpg'); background-size: cover; background-position: right;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2 text-center md:text-left">
                            <p class="font-messeri text-5xl leading-tight">Lecturas de tarot</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="https://wa.link/qntznx" target="_blank"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 312 6890051
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Rituales para la abundancia --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/wealth-slide.jpg'); background-size: cover; background-position: right;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2 text-center md:text-left">
                            <p class="font-messeri text-5xl leading-tight">Rituales para la abundancia</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="https://wa.link/qntznx" target="_blank"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 312 6890051
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Rituales poderosos para la salud --}}
                <div
                    class="swiper-slide"
                    style="background-image: url('images/health-slide.jpg'); background-size: cover; background-position: right;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="md:w-1/2 text-center md:text-left">
                            <p class="font-messeri text-5xl leading-tight">Rituales poderosos para la salud</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="https://wa.link/qntznx" target="_blank"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 312 6890051
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </section>


        {{-- Services --}}
        <section class="container">
            <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="servicios">Servicios</h2>

            {{-- Amarres de amor --}}
            <x-service-article
                title="Amarres de amor"
                :image-url="asset('images/pareja.png')"
            >
                Si tu pareja se encuentra distante y no te presta la misma atención. <br>
                Los rituales de endulzamiento convierten a tu pareja en una persona amoroza y atenta nuevamente. <br>
                Tu pareja te verá con ojos de amor, ternura y deseo y quedará rendida a tus peticiones.
            </x-service-article>

            {{-- Lecturas de tarot --}}
            <x-service-article
                class="mt-16"
                title="Lecturas de tarot"
                :image-url="asset('images/tarot2.png')"
                reversed
            >
                Día a día las personas consultan nuestro tarot del amor para saber si esa persona especial se quedará para siempre o si las cosas marcharán bien entre ambos. <br>
                Consulta tu suerte en el dinero o si quieres saber que te depara el futuro laboral.
            </x-service-article>

            {{-- Conjuros de protección --}}
            <x-service-article
                class="mt-16"
                title="Conjuros de protección"
                :image-url="asset('images/proteccion.png')"
            >
                Utilizamos la magia blanca con diferentes objetivos y la finalidad de proteger tu entorno social sin hacerle daño a nadie, limpiando tu casa y alejando todo mal que se aproxime.
            </x-service-article>

            {{-- Parejas del mismo sexo --}}
            <x-service-article
                class="mt-16"
                title="Parejas del mismo sexo"
                :image-url="asset('images/gay-couple.png')"
                reversed
            >
                Atraemos a su Pareja del mismo sexo para una relación más duradera y estable <br>
                Se adaptan a la situación de la persona que desee el hechizo de amor para obtener el beneficio del cariño que este desea.
            </x-service-article>

            {{-- Trabajos para la salud --}}
            <x-service-article
                class="mt-16"
                title="Trabajos para la salud"
                :image-url="asset('images/jose-gregorio.png')"
            >
                Trabajos para mejorar su salud, agotamiento, depresión, irritabilidad, estos proveen de prosperidad y beneficios mediante rituales de evocación e invocación.
            </x-service-article>

            <p class="font-messeri mt-16 text-center text-3xl">Y mucho más...</p>
        </section>

        {{-- Testimonios --}}
        <section class="container">
            <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary leading-tight" id="testimonios">Lo que dicen nuestros clientes</h2>

            <!-- Slider main container -->
            <div class="swiper-container" id="testimonio-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-primary-light">
                        <x-testimony-card
                            :avatar-url="asset('images/avatar3.png')"
                            name="Diana Fernández"
                            testimony="En algún momento de mi vida, la desesperación y amargura se apoderaron de mi vida, pero gracias a ustedes encontré la paz y a la afinidad de mis días."
                        />
                    </div>

                    <div class="swiper-slide bg-primary-light">
                        <x-testimony-card
                            :avatar-url="asset('images/avatar2.png')"
                            name="Fernando C."
                            testimony="Cuando mi pareja me abandonó, sentí que se derrumbaba mi alma, pero gracias a Hechicera Hindu ella regresó siendo una persona mas razonable, más tranquila y más espiritual."
                        />
                    </div>

                    <div class="swiper-slide bg-primary-light">
                        <x-testimony-card
                            :avatar-url="asset('images/avatar4.png')"
                            name="María Villegas"
                            testimony="Estoy muy agradecida porque gracias a ustedes recupere el amor de mi vida."
                        />
                    </div>

                    <div class="swiper-slide bg-primary-light">
                        <x-testimony-card
                            :avatar-url="asset('images/avatar.png')"
                            name="Emily Camacho"
                            testimony="Estoy muy agradecida porque gracias a ustedes mi vida mejoró, consegui un buen empleo y mi relacion va muy bien."
                        />
                    </div>
                </div>
            </div>
        </section>

        {{-- Contacto --}}
        <section class="container">
            <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="contacto">Contacto</h2>

            <livewire:web.contact-form />
        </section>
    </div>

    <div class="fixed z-10 flex items-center justify-center" style="bottom: 2rem; right: 2rem;">
        <span class="hidden sm:block bg-white text-sm border border-gray-400 shadow-md mr-3 px-3 py-1 rounded-md">Hola ¿Necesitas ayuda?</span>
        <a href="https://wa.link/qntznx" target="_blank">
            <img src="{{ asset('images/whatsapp-green.svg') }}" alt="Link a whatsapp" class="block w-12 h-12 sm:w-16 sm:h-16">
        </a>
    </div>

    <livewire:scripts />

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
