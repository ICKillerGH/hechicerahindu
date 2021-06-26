@extends('layouts.web')

@section('content')
    <section class="swiper-container" id="hero-slider">
        <div class="swiper-wrapper">
            {{-- Atendido por los mejores guias espirituales --}}
            <div
                class="swiper-slide"
                style="background-image: url('images/candle.png'); background-size: cover; background-position: right"
            >
                <div class="container h-full flex flex-col justify-center">
                    <div class="md:w-1/2">
                        <p class="font-messeri text-4xl md:text-5xl text-center md:text-left leading-tight">Atendido por los mejores guias espirituales</p>
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
                            href="https://wa.link/1468wn" target="_blank"
                            class="mt-4 px-5 py-3 inline-block bg-green-500 hover:bg-green-400 text-xl rounded-lg"
                        >
                            <span class="w-4 h-4 inline-block">
                                <x-icons.whatsapp />
                            </span>
                            Whatsapp +57 320 9983427
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
                            href="https://wa.link/1468wn" target="_blank"
                            class="mt-4 px-5 py-3 inline-block bg-green-500 hover:bg-green-400 text-xl rounded-lg"
                        >
                            <span class="w-4 h-4 inline-block">
                                <x-icons.whatsapp />
                            </span>
                            Whatsapp +57 320 9983427
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
                            href="https://wa.link/1468wn" target="_blank"
                            class="mt-4 px-5 py-3 inline-block bg-green-500 hover:bg-green-400 text-xl rounded-lg"
                        >
                            <span class="w-4 h-4 inline-block">
                                <x-icons.whatsapp />
                            </span>
                            Whatsapp +57 320 9983427
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
                            href="https://wa.link/1468wn" target="_blank"
                            class="mt-4 px-5 py-3 inline-block bg-green-500 hover:bg-green-400 text-xl rounded-lg"
                        >
                            <span class="w-4 h-4 inline-block">
                                <x-icons.whatsapp />
                            </span>
                            Whatsapp +57 320 9983427
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
                            href="https://wa.link/1468wn" target="_blank"
                            class="mt-4 px-5 py-3 inline-block bg-green-500 hover:bg-green-400 text-xl rounded-lg"
                        >
                            <span class="w-4 h-4 inline-block">
                                <x-icons.whatsapp />
                            </span>
                            Whatsapp +57 320 9983427
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

    {{-- Selecciona tu signo zodiacal --}}
    <section class="container">
        <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary leading-tight" id="horoscopos">Horóscopos - Selecciona tu signo</h2>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 grid-rows-2 gap-4">
            @foreach ($zodiacSigns as $sign)
                <div class="flex flex-col items-center p-5 space-y-4 bg-primary-light border border-gray-800">
                    <a href="{{ route('horoscopes', ['zodiacSign' => Str::slug(trans($sign['name']))]) }}">
                        <img
                            src="{{ asset($sign['image_url']) }}"
                            alt="@lang($sign['name'])"
                            class="w-24 h-24 rounded-lg border border-gray-800"
                        />
                    </a>

                    <div class="space-y-1 text-center">
                        <h3 class="font-messeri text-2xl sm:text-3xl text-blue-400 leading-none">
                            <a href="{{ route('horoscopes', ['zodiacSign' => Str::slug(trans($sign['name']))]) }}">@lang($sign['name'])</a>
                        </h3>

                        <p class="text-gray-300 text-sm sm:text-base leadidng-none">
                            @lang($sign['range'])
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
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

    {{-- Testimonios en video --}}
    <section class="container">
        <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary leading-tight">Testimonios en video</h2>

        <div class="flex justify-center flex-wrap sm:justify-evenly">
            <video src="{{ asset('videos/VID-20210604-WA0009.mp4') }}" controls class="mb-3 sm:mb-0"></video>
            <video src="{{ asset('videos/VID-20210605-WA0000.mp4') }}" controls></video>
        </div>
    </section>

    {{-- Contacto --}}
    <section class="container">
        <h2 class="font-messeri my-12 text-center text-5xl font-bold text-secondary" id="contacto">Contacto</h2>

        <livewire:web.contact-form />
    </section>
@endsection
