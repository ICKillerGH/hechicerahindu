<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hechicera hindu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600;700&family=Nunito&family=Shrikhand&display=swap" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen bg-primary text-white pb-12">
        {{-- Header --}}
        <div class="container">
            <div class="flex items-center py-4">
                <h1 class="font-shrikhand text-4xl">
                    <a href="#">Hechicera hindú</a>
                </h1>

                <div class="ml-auto flex items-center">
                    <span class="w-5 h-5">
                        <x-icons.phone />
                    </span>
                    <span class="ml-1 text-xl font-semibold">+57 123 1545656</span>
                </div>
            </div>
        </div>

        {{-- Menú --}}
        <div class="bg-primary-light">
            <div class="container">
                <div class="flex items-center">
                    <ul class="flex">
                        <li class="pr-4 py-5 font-semibold"><a href="#">Inicio</a></li>
                        <li class="px-4 py-5 font-semibold"><a href="#servicios">Servicios</a></li>
                        <li class="px-4 py-5 font-semibold"><a href="#testimonios">Testimonios</a></li>
                        <li class="px-4 py-5 font-semibold"><a href="#">Horóscopo</a></li>
                        <li class="px-4 py-5 font-semibold"><a href="#contacto">Contacto</a></li>
                    </ul>

                    <div class="ml-auto">
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
            </div>
        </div>

        <!-- Slider main container -->
        <div class="swiper-container" id="hero-slider">
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
        </div>

        {{-- Services --}}
        <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="servicios">Servicios</h2>

        <div class="container">
            {{-- Amarres de amor --}}
            <article class="flex">
                <div class="w-1/2 pr-3">
                    <h3 class="font-messeri text-3xl font-bold">Amarres de amor</h3>
                    <p class="mt-3 text-lg">
                        Si tu pareja se encuentra distante y no te presta la misma atención. <br>
                        Los rituales de endulzamiento convierten a tu pareja en una persona amoroza y atenta nuevamente. <br>
                        Tu pareja te verá con ojos de amor, ternura y deseo y quedará rendida a tus peticiones.
                    </p>
                </div>
                <div class="w-1/2 pl-3">
                    <img
                        src="{{ asset('images/pareja.png') }}"
                        alt="Parejas"
                        class="w-full block rounded-lg object-cover"
                        style="height: 275px"
                    >
                </div>
            </article>

            {{-- Lecturas de tarot --}}
            <article class="flex mt-16">
                <div class="w-1/2 pl-3">
                    <h3 class="font-messeri text-3xl font-bold">Lecturas de tarot</h3>
                    <p class="mt-3 text-lg">
                        Día a día las personas consultan nuestro tarot del amor para saber si esa persona especial se quedará para siempre o si las cosas marcharán bien entre ambos. <br>
                        Consulta tu suerte en el dinero o si quieres saber que te depara el futuro laboral.
                    </p>
                </div>
                <div class="w-1/2 pr-3 order-first">
                    <img
                        src="{{ asset('images/tarot2.png') }}"
                        alt="Tarot"
                        class="w-full block rounded-lg object-cover"
                        style="height: 275px"
                    >
                </div>
            </article>

            {{-- Conjuros de protección --}}
            <article class="flex mt-16">
                <div class="w-1/2 pr-3">
                    <h3 class="font-messeri text-3xl font-bold">Conjuros de protección</h3>
                    <p class="mt-3 text-lg">
                        Utilizamos la magia blanca con diferentes objetivos y la finalidad de proteger tu entorno social sin hacerle daño a nadie, limpiando tu casa y alejando todo mal que se aproxime.
                    </p>
                </div>
                <div class="w-1/2 pl-3">
                    <img
                        src="{{ asset('images/proteccion.png') }}"
                        alt="Protección"
                        class="w-full block rounded-lg object-cover"
                        style="height: 275px"
                    >
                </div>
            </article>

            {{-- Parejas del mismo sexo --}}
            <article class="flex mt-16">
                <div class="w-1/2 pl-3">
                    <h3 class="font-messeri text-3xl font-bold">Parejas del mismo sexo</h3>
                    <p class="mt-3 text-lg">
                        Atraemos a su Pareja del mismo sexo para una relación más duradera y estable <br>
                        Se adaptan a la situación de la persona que desee el hechizo de amor para obtener el beneficio del cariño que este desea.
                    </p>
                </div>
                <div class="w-1/2 pr-3 order-first">
                    <img
                        src="{{ asset('images/gay-couple.png') }}"
                        alt="Parejas del mismo sexo"
                        class="w-full block rounded-lg object-cover"
                        style="height: 275px"
                    >
                </div>
            </article>

            {{-- Trabajos para la salud --}}
            <article class="flex mt-16">
                <div class="w-1/2 pr-3">
                    <h3 class="font-messeri text-3xl font-bold">Trabajos para la salud</h3>
                    <p class="mt-3 text-lg">
                        Trabajos para mejorar su salud, agotamiento, depresión, irritabilidad, estos proveen de prosperidad y beneficios mediante rituales de evocación e invocación.
                    </p>
                </div>
                <div class="w-1/2 pl-3">
                    <img
                        src="{{ asset('images/jose-gregorio.png') }}"
                        alt="Trabajos para la salud"
                        class="w-full block rounded-lg object-cover"
                        style="height: 275px"
                    >
                </div>
            </article>

            <p class="font-messeri mt-16 text-center text-3xl">Y mucho más...</p>
        </div>

        {{-- Testimonios --}}
        <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="testimonios">Lo que dicen nuestro clientes</h2>

        <div class="container">
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
        </div>

        <div class="container">
            {{-- Contacto --}}
            <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="contacto">Contacto</h2>

            <div class="flex">
                <div class="w-1/2 pr-3">
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
                <div class="w-1/2 pl-3 flex flex-col">
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
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const heroSwiper = new Swiper('#hero-slider', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: {
                delay: 4000,
            }
        });

        const testimoniosSwiper = new Swiper('#testimonio-slider', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                delay: 4000,
            }
        })
    </script>
</body>
</html>
