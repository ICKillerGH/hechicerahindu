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
                        src="http://hechi.localhost/images/zodiac-signs/aries.jpg"
                        alt="Aries"
                        class="w-56 h-56 mb-6 sm:mb-0 border border border-gray-800 rounded-lg"
                    />

                    <div class="flex-1 flex flex-col justify-center text-center">
                        <h3 class="font-messeri text-5xl text-blue-400 leading-none">
                            Capricornio
                        </h3>

                        <p class="text-gray-300 text-lg leadidng-none">
                            Mar 21 - Abr 19
                        </p>
                    </div>
                </div>

                <div class="text-gray-300">
                    <p class="mb-4 italic text-gray-400 text-sm">Semana del 12 Oct al 18 Oct</p>

                    Jan 7, 2020: Today's going to start off as a very calm day, with nary a ripple on the proverbial water's surface. But as the day goes on, there will be lots of activity right under that surface. Sharks are swimming down there, and while they don't have specific designs on taking a chunk out of your flesh, they do have some ulterior motives for their sweet-sounding ideas. Ask questions. Probe deeper. Discover the true motivations of people today, and you'll be able to stick to safe waters.
                    <br>
                    <br>

    But practically is the key word here: With Jupiter in Capricorn sextile Neptune in Pisces (February 20, July 27, and October 12), it’s easy to overestimate how much you can handle… and underestimate your need for R&R.
    <br>
    <br>

    Overdoing it could catch up with you by the time Mars enters Pisces and Jupiter and Neptune station retrograde (May 12, May 14, and June 23). Restore the balance by allowing yourself plenty of downtime and mental health days.
    <br>
    <br>

    Mars comes home to your sign on June 27 and stays until early 2021. You’ll be eager to push forward with a new approach—but not so fast, Aries! With Mars retrograde September 9-November 13, you’ll want to conserve your energy.
    <br>
    <br>

    Career concerns may press on your mind, but try not to use up all your bandwidth on them: Two new moons (June 20 solar eclipse, July 20) and full moons (January 10 lunar eclipse, December 29) in Cancer put family on the front burner this year.
    <br>
    <br>

    Specifically, with Venus in Gemini April 3-August 7 (retrograde May 12-June 24) and the north node in that sign beginning May 5, relationships with siblings, cousins, and other relatives are a major focus, offering opportunities for personal growth.
    <br>
    <br>

    Communication is key, and with Mercury in Cancer May 28-August 4 (retrograde June 17-July 12) there’s likely to be some tense family meetings or heart-to-heart talks. Practical concerns such as childcare, eldercare, and division of household duties carry an extra emotional charge. Watch out for hypersensitivity or nostalgia for the past that could block honest, constructive dialogues from taking place.
    <br>
    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
