<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hechicera hindu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600;700&family=Nunito&family=Shrikhand&display=swap" rel="stylesheet">
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
                    <span class="ml-1 text-xl font-semibold">+57 123 1545656</span>
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
                        <li class="py-3 sm:px-4 sm:py-5 font-semibold"><a href="#">Horóscopo</a></li>
                        <li class="pt-3 pb-6 sm:px-4 sm:py-5 font-semibold"><a href="#contacto">Contacto</a></li>
                    </ul>

                    <div class="hidden sm:block ml-auto">
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
                </nav>
            </div>
        </section>

        <!-- Slider main container -->
        <section class="swiper-container" id="hero-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div
                    class="swiper-slide"
                    style="background-image: url('images/candle.png'); background-size: cover;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="w-1/2">
                            <p class="font-messeri text-5xl leading-tight">Atendido por los mejores guias espirtuales</p>
                            <p class="mt-4 text-xl">
                                Triunfa en la vida, el amor y la salud. Realizamos mejores hechizos con resultados inmediatos
                                y 100% garantizados.
                            </p>
                            <a
                                href="#contacto"
                                class="mt-4 px-5 py-3 inline-block bg-secondary hover:bg-secondary-light text-xl rounded-lg"
                            >
                                Contactanos
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="swiper-slide"
                    style="background-image: url('images/hands.png'); background-size: cover;"
                >
                    <div class="container h-full flex flex-col justify-center">
                        <div class="w-1/2">
                            <p class="font-messeri text-5xl leading-tight">Amarres efectivos</p>
                            <p class="mt-4 text-xl">
                                Contactanos por whatsapp
                            </p>
                            <a
                                href="#"
                                class="mt-4 px-5 py-3 inline-block bg-green-600 hover:bg-green-500 text-xl rounded-lg"
                            >
                                <span class="w-4 h-4 inline-block">
                                    <x-icons.whatsapp />
                                </span>
                                Whatsapp +57 123 1545656
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

            <div class="flex flex-col sm:flex-row">
                <div class="sm:w-1/2 sm:pr-3">
                    <div class="mb-3">
                        <label for="name" class="block mb-1">Nombre</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                            autocomplete="off"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="block mb-1">Teléfono</label>
                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                            autocomplete="off"
                        />
                    </div>
                    <div>
                        <label for="subject" class="block mb-1">Asunto</label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            class="block w-full px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary rounded-full"
                            autocomplete="off"
                        />
                    </div>
                </div>
                <div class="sm:w-1/2 sm:pl-3 flex flex-col">
                    <label for="message" class="block mb-1">Mensaje</label>
                    <textarea
                        name="message"
                        id="message"
                        class="block w-full flex-grow px-4 py-3 bg-transparent focus:outline-none border border-gray-800 focus:border-secondary"
                        style="border-radius: 30px;"
                    ></textarea>
                </div>
            </div>

            <div class="text-center mt-5">
                <button
                    type="submit"
                    class="inline-block px-6 py-3 bg-secondary text-white rounded-full focus:outline-none hover:bg-secondary-light focus:shadow-outline"
                >
                    Enviar mensaje
                </button>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
