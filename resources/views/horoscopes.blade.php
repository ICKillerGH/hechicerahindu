@extends('layouts.web', ['title' => 'Horóscopos'])

@section('content')
    <div class="container mt-10">
        <div class="flex flex-col lg:flex-row items-start lg:space-x-8">
            {{-- Sidebar --}}
            <div class="w-full lg:w-2/6 grid sm:grid-cols-2 lg:grid-cols-1 gap-4">
                @foreach($zodiacSigns as $sign)
                    <div class="flex p-4 bg-primary-light">
                        <a href="{{ route('horoscopes', ['zodiacSign' => Str::slug(trans($sign['name']))]) }}">
                            <img
                                src="{{ asset($sign['image_url']) }}"
                                alt="@lang($sign['name'])"
                                class="w-16 h-16 border border border-gray-800 rounded-lg"
                            />
                        </a>

                        <div class="flex-1 flex flex-col justify-center pl-4 text-center">
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

            <div class="flex-1 order-first lg:order-none p-4 mb-8 lg:mb-0 space-y-4 bg-primary-light">
                <div class="flex flex-col items-center sm:flex-row space-x-4">
                    <img
                        src="{{ asset($zodiacSign['image_url']) }}"
                        alt="{{ __($zodiacSign['name']) }}"
                        class="w-56 h-56 mb-6 sm:mb-0 border border border-gray-800 rounded-lg"
                    />

                    <div class="flex-1 flex flex-col justify-center text-center">
                        <h3 class="font-messeri text-5xl text-blue-400 leading-none">
                            {{ __($zodiacSign['name']) }}
                        </h3>

                        <p class="text-gray-300 text-lg leadidng-none">
                            {{ Str::slug(__($sign['name'])) }}
                        </p>
                    </div>
                </div>

                <div class="text-gray-300">
                    @if ($horoscope)
                        <p class="mb-4 italic text-gray-400 text-sm">{{ $horoscope->date_range_for_humans }}</p>
                        {!! $horoscope->content !!}
                    @else
                        <div class="flex flex-col items-center mt-10">
                            <img
                                src="{{ asset('images/pending.png') }}"
                                alt="Reloj"
                                class="w-32 h-32"
                            />
                            <p class="py-5 text-center text-xl font-italic">
                                Aún no se ha cargado el horóscopo para este signo, te invitamos a regresar en un rato.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
