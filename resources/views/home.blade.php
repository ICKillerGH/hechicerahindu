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
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .font-messeri {
            font-family: 'El Messiri', sans-serif;
        }

        .font-shrikhand {
            font-family: 'Shrikhand', cursive;
        }

        .swiper-container {
            width: 100%;
            height: 450px;
        }

        #testimonio-slider {
            height: 500px;
        }
    </style>
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
                    <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
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
                        <li class="px-4 py-5 font-semibold"><a href="#">Horócopo</a></li>
                        <li class="px-4 py-5 font-semibold"><a href="#contacto">Contacto</a></li>
                    </ul>

                    <div class="ml-auto">
                        {{-- Facebook Icon --}}
                        <a href="#">
                            <svg class="inline-block h-5 w-5 text-white" stroke="currentColor" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
                        </a>

                        {{-- Instagram Icon --}}
                        <a href="#">
                            <svg class="inline-block h-5 w-5 text-white mx-2" viewBox="0 0 511 511.9" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/></svg>
                        </a>

                        {{-- Whatsapp Icon --}}
                        <a href="#">
                            <svg class="inline-block h-5 w-5 text-white" stroke="currentColor" fill="currentColor" viewBox="-23 -21 682 682.66669" xmlns="http://www.w3.org/2000/svg"><path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd"/></svg>
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
                    Slide 1
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
                        Los rituales de endulzamiento convierten a tu pareja enuna persona amoroza y atenta nuevamente. <br>
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
                        <div
                            class="px-5 h-full border border-gray-800 text-center"
                            style="
                                background-image: url({{ asset('images/space_bg.png') }});
                                background-size: 100% 130px;
                                background-repeat: no-repeat;
                            "
                        >
                            <img
                                src="{{ asset('images/avatar.png') }}"
                                alt="Avatar"
                                class="inline-block w-32 h-32 mt-16 object-cover rounded-full"
                            />
                            <h4 class="mt-10 font-messeri text-2xl text-blue-400">Petra Pérez</h4>
                            <p class="mt-10 text-xl italic">Estoy muy agradecida porque gracias a ustedes recupere el amor de mi vida</p>
                            <img src="{{ asset('images/quote.png') }}" alt="quote" class="inline-block">
                        </div>
                    </div>
                    <div class="swiper-slide bg-primary-light">
                        <div
                            class="px-5 h-full border border-gray-800 text-center"
                            style="
                                background-image: url({{ asset('images/space_bg.png') }});
                                background-size: 100% 130px;
                                background-repeat: no-repeat;
                            "
                        >
                            <img
                                src="{{ asset('images/avatar.png') }}"
                                alt="Avatar"
                                class="inline-block w-32 h-32 mt-16 object-cover rounded-full"
                            />
                            <h4 class="mt-10 font-messeri text-2xl text-blue-400">Petra Pérez</h4>
                            <p class="mt-10 text-xl italic">Estoy muy agradecida porque gracias a ustedes recupere el amor de mi vida</p>
                            <img src="{{ asset('images/quote.png') }}" alt="quote" class="inline-block">
                        </div>
                    </div>
                    <div class="swiper-slide bg-primary-light">
                        <div
                            class="px-5 h-full border border-gray-800 text-center"
                            style="
                                background-image: url({{ asset('images/space_bg.png') }});
                                background-size: 100% 130px;
                                background-repeat: no-repeat;
                            "
                        >
                            <img
                                src="{{ asset('images/avatar.png') }}"
                                alt="Avatar"
                                class="inline-block w-32 h-32 mt-16 object-cover rounded-full"
                            />
                            <h4 class="mt-10 font-messeri text-2xl text-blue-400">Petra Pérez</h4>
                            <p class="mt-10 text-xl italic">Estoy muy agradecida porque gracias a ustedes recupere el amor de mi vida</p>
                            <img src="{{ asset('images/quote.png') }}" alt="quote" class="inline-block">
                        </div>
                    </div>
                    <div class="swiper-slide bg-primary-light">
                        <div
                            class="px-5 h-full border border-gray-800 text-center"
                            style="
                                background-image: url({{ asset('images/space_bg.png') }});
                                background-size: 100% 130px;
                                background-repeat: no-repeat;
                            "
                        >
                            <img
                                src="{{ asset('images/avatar.png') }}"
                                alt="Avatar"
                                class="inline-block w-32 h-32 mt-16 object-cover rounded-full"
                            />
                            <h4 class="mt-10 font-messeri text-2xl text-blue-400">Petra Pérez</h4>
                            <p class="mt-10 text-xl italic">Estoy muy agradecida porque gracias a ustedes recupere el amor de mi vida</p>
                            <img src="{{ asset('images/quote.png') }}" alt="quote" class="inline-block">
                        </div>
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
        const mySwiper = new Swiper('#hero-slider', {
            // Optional parameters
            loop: true,

            // If we need pagination
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
